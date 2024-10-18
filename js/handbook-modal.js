jQuery(document).ready(function($) {
    const modal = $('#handbookModal');
    const modalContent = $('#modalContent');

    // 處理換行的函數
        function formatContent(content) {
            // 將文字按換行符分割成數組，然後用 map 轉換每段為 p 標籤
            return content.split('\n')
                .map(paragraph => paragraph.trim()) // 去除每段的空白
                .filter(paragraph => paragraph) // 過濾掉空段落
                .map(paragraph => `<p>${paragraph}</p>`) // 轉換為 p 標籤
          
                .join(''); // 合併所有段落
        }
    $(document).on('click', '#handbookButton', function(e) {
        e.preventDefault();
        
        modalContent.html('<div style="text-align: center; padding: 2rem;">載入中...</div>');
        modal.fadeIn(300);

        $.ajax({
            url: handbookAjax.ajaxurl,
            type: 'GET',
            data: {
                action: 'get_handbook'
            },
            success: function(response) {
                const formattedContent = formatContent(response.content);

                modalContent.html(`
                    <div class="modal-header">
                        <img src="${response.image_url}" alt="SO BRIGHT 手不盲" />
                    </div>
                    <div class="modal-body">
                        <div class="modal-title">${response.title}</div>
                        <div class="modal-text">
                            ${formattedContent}
                        </div>
                        <div class="modal-buttons">
                            <a href="#" class="handbook-modal-button1">前往官網</a>
                            <button class="handbook-modal-button2">關閉</button>
                        </div>
                    </div>
                `);
            },
            error: function(xhr, status, error) {
                modalContent.html(`
                    <div class="modal-body">
                        <div style="text-align: center; color: #ff0000; padding: 2rem;">
                            發生錯誤，請稍後再試
                        </div>
                    </div>
                `);
                console.error('錯誤:', error);
            }
        });
    });

    // 關閉按鈕事件
    $(document).on('click', '.handbook-modal-button2', function() {
        modal.fadeOut(300);
    });

    // 點擊背景關閉
    $(window).on('click', function(event) {
        if (event.target === modal[0]) {
            modal.fadeOut(300);
        }
    });

    // ESC鍵關閉
    $(document).keydown(function(event) {
        if (event.keyCode === 27) {
            modal.fadeOut(300);
        }
    });
});