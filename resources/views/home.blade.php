<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #d9d9d9;" >
    <div style="max-width: 900px; margin: 50px auto; background-color: #fff; padding: 10px 50px">
        <h1>lumen test</h1>
        <h3>boot type</h3>
        <ul>
            <li>simple</li>
            <li>facade</li>
            <li>auth</li>
            <li>authfacade</li>
        </ul>
        <h3>routes</h3>
        <ul>
            <li>get:hello => hello world</li>
            <li>get:user => authenticated user</li>
            <li>get:userone => first user</li>
            <li>get:users => paginated users</li>
        </ul>
        <h3>sample taoken</h3>
        <ul>
            <li>{{ App\Models\User::find(1)->token }}</li>
        </ul>
    </div>
</body>
</html>