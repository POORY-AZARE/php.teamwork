<?php include 'header.php'; ?>

<title>Aston Martin DBS Coupe</title>
<style>
    .car-details {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        background-color: #f5f5f5;
        border-radius: 10px;
        font-family: Arial, sans-serif;
    }
    img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
    .specifications {
        margin-top: 20px;
        background-color: #eaeaea;
        padding: 10px;
        border-radius: 8px;
    }
    h1, h2 {
        color: #333;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        margin-bottom: 10px;
        font-size: 16px;
        color: #666;
    }
    li:before {
        content: "• ";
        color: #007bff;
    }
</style>
</head>
<body>

<div class="car-details">
    <h1>Aston Martin DBS Coupe</h1>
    <img src="images/013.jpg" alt="Aston-Martin-DBS-Coupe">
    <div class="specifications">
        <h2>Specifications:</h2>
        <ul>
            <li>Price: $213,888</li>
            <li>Year of Manufacture: 2024</li>
            <li>Type of Use: Personal Vehicle</li>
        </ul>
    </div>
</div>

<?php include 'footer.php'; ?>