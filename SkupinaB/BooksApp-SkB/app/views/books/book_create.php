<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <h2>Přidat novou knihu</h2>
            <p>Prosím, vyplňte následující formulář pro přidání nové knihy do databáze.</p>
        </div>
        <div>
            <form action="/books/create" method="post">
                <div>
                    <label for="title">Název knihy: <span>*</span></label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div>
                    <label for="author">Autor: <span>*</span></label>
                    <input type="text" id="author" name="author" required>
                </div>
                <div>
                    <label for="category">Kategorie: </label>
                    <input type="text" id="category" name="category" >
                </div>
                <div>
                    <label for="subcategory">Podkategorie: </label>
                    <input type="text" id="subcategory" name="subcategory" >
                </div>
                <div>
                    <label for="published_date">Datum vydání: <span>*</span></label>
                    <input type="date" id="published_date" name="published_date" required>
                </div>
                <div>
                    <button type="submit">Přidat knihu</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>