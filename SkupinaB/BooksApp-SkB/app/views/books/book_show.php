<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    <title>Upravit knihu</title>
</head>
<body>
    <div>
        <p>
            <a href="<?= BASE_URL ?>/index.php">&larr; Zpět na seznam knih</a>
        </p>

        <div>
            <h2>Zobrazit knihu (ID záznamu: <?= htmlspecialchars($book['id']) ?>)</h2>
            <p>Zobrazujete data pro knihu: <strong><?= htmlspecialchars($book['title']) ?></strong></p>
        </div>
        
        <div>
            <table>
                <tr>
                    <th>ID v databázi</th>
                    <td><?= htmlspecialchars($book['id']) ?></td>
                </tr>
                <tr>
                    <th>Název knihy</th>
                    <td><?= htmlspecialchars($book['title']) ?></td>
                </tr>
                <tr>
                    <th>Autor</th>
                    <td><?= htmlspecialchars($book['author']) ?></td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td><?= htmlspecialchars($book['isbn']) ?></td>
                </tr>
                <tr>
                    <th>Kategorie</th>
                    <td><?= htmlspecialchars($book['category']) ?></td>
                </tr>
                <tr>
                    <th>Podkategorie </th>
                    <td><?= htmlspecialchars($book['subcategory'] ?? '') ?></td>
                </tr>
                <tr>
                    <th>Rok vydání</th>
                    <td><?= htmlspecialchars($book['year']) ?></td>
                </tr>
                <tr>
                    <th>Cena knihy</th>
                    <td><?= htmlspecialchars($book['price']) ?></td>
                </tr>
                <tr>
                    <th>Odkaz</th>
                    <td><?= htmlspecialchars($book['link']) ?></td>
                </tr>
                <tr>
                    <th>Popis knihy</th>
                    <td><pre><?= htmlspecialchars($book['description']) ?></pre></td>
                </tr>    
                <tr>
                    <th>Obrázky</th>
                    <td>(zatím neřešíme, můžete ignorovat)</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>