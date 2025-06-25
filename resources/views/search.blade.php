<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>產品搜尋</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>搜尋產品</h1>
    <input type="text" id="keyword" placeholder="輸入關鍵字，如：手機 電腦">
    <button id="searchBtn">搜尋</button>

    <pre id="result"></pre>

    <script>
        $('#searchBtn').on('click', function () {
            let query = $('#keyword').val();

            $.ajax({
                url: '/products/search',
                method: 'GET',
                data: { q: query },
                success: function (data) {
                    $('#result').text(JSON.stringify(data, null, 2));
                },
                error: function (xhr) {
                    $('#result').text('搜尋錯誤：' + xhr.status);
                }
            });
        });
    </script>
</body>
</html>
