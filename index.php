<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cubob</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="first_emptybox"></div>
        
        <div class="container header">
            <h1>Cubob</h1>
            <div class="d-flex justify-content-center">
                <input type="text"/>
                <button class="szunet">Search</button>

                <h4 class="szunet">Rated:</h4>
                <select name="rated" id="rated" class="szunet">
                    <option value="rated_all">All</option>
                    <option value="rated_no">Unrated</option>
                    <option value="rated_yes">Rated</option>
                </select>

                <h4 class="szunet">Difficulty:</h4>
                <select name="difficulty" id="difficulty" class="szunet">
                    <option value="diff_all">All</option>
                    <option value="diff_1">Easy</option>
                    <option value="diff_2">Medium</option>
                    <option value="diff_3">Hard</option>
                    <option value="diff_4">Extreme</option>
                    <option value="diff_5">Legendary</option>
                </select>

                <h4 class="szunet">Sorting:</h4>
                <select name="sorting" id="sorting" class="szunet">
                    <option value="sort_recent">Recent</option>
                    <option value="sort_oldest">Oldest</option>
                </select>
            </div>
        </div>

    <div class="container main">
        <h1 class="text-center">Levels</h1>
        
        <table>
            <tr>
                <th>Name</th>
                <th>Creator</th>
                <th>Difficulty</th>
                <th>Date</th>
                <th>Rated</th>
            </tr>
            
            <tr>
                <td>Level Test</td>
                <td>Nompo</td>
                <td>Legendary</td>
                <td>2025-05-22</td>
                <td>Rated</td>
            </tr>

            <tr>
                <td>The Easy</td>
                <td>Nompo</td>
                <td>Easy</td>
                <td>2025-05-21</td>
                <td>Unrated</td>
            </tr>

        </table>
        <div class="last_emptybox"></div>
    </div>
</body>
</html>
