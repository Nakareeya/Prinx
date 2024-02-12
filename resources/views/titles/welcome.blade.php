<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylephp.css">

</head>

<body>
    <h1 class="head">ตารางแม่สูตรคูณ</h1>
    <div class="css">
        <input type="text" id="my_number" value="">
        <button onclick="myFunction2()">submit</button>
    </div>
    <br>
    <table id="my_table">
        <thead>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody id="my_tbody">

        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    function myFunction2() {
            let my_number = parseInt($('#my_number').val())
            let my_code_tr = ``
            var item = "";
            for( var i=1; i<=12; i++ ) {
                item = item + my_number +" x "+i+" = "+( my_number * i )+"<br/>";
                console.log(item);
            }
            $('#my_tbody').html(item)
        }
</script>
</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&family=Roboto+Slab:wght@500&family=Rubik+Bubbles&display=swap');
body {
    background-image: url('https://img.freepik.com/premium-vector/empty-school-classroom-with-green-chalkboard_38747-1238.jpg');
    background-size: cover;
}

h1 {
    font-family: 'Noto Sans Thai', sans-serif;
    text-align: center;
}

input[type="text"] {
    justify-content: center;
    align-items: center;
    padding: 5px;
    font-size: 16px;

}

.css{
    display: flex;
    justify-content: center;
    align-items: center;
}

#my_tbody{
    color: white;
}
button {
    padding: 8px 16px;
    font-size: 16px;
    background-color: #4caf50;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

table {
    width: 50%;
    margin: 20px auto;
    margin-right: 50px;
}

th, td {
    padding-left: 200px;
    text-align: center;
}

    </style>
</html>


