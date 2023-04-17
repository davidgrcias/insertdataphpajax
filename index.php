<html>
  <head>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    Name
    <input type="text" id = "name">
    <br>
    Age
    <input type="number" id = "age">
    <br>
    <button type="button" id = "insert">Insert</button>

    <script type="text/javascript">
        $('#insert').on('click', function(){
          var data = {
            name: $('#name').val(),
            age: $('#age').val(),
          };
          $.ajax({
            url: 'index.php',
            type: 'post',
            data: data,
            success:function(){
              alert('Inserted Successfully');
            }
          })
        })
    </script>

    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'data');

    if(isset($_POST['name'])){
      $name = $_POST['name'];
      $age = $_POST['age'];

      $query = "INSERT INTO tb_data VALUES('', '$name', '$age')";
      mysqli_query($conn, $query);
    }
    ?>
  </body>
</html>
