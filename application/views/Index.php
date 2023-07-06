<!DOCTYPE html>
<html>
<head>
  <title>Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .form-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 5px;
    }

    .form-container h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-container label {
        font-weight: bold;
    }

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-container select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-container input[type="radio"] {
        margin-bottom: 10px;
    }

    .form-container input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .form-container input[type="submit"]:hover {
        background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="form-container">
          <h1>Add Payment Type</h1>
          <form action="<?php echo base_url('home/insert');?>" method="post">
            <label for="Currency_id">Currency:</label><br>
            <select name="Currency_id" required="required">
              <option value="">Choose Currency</option>
              <?php foreach ($SendCurrencyInfo as $item): ?>
                     <option value="<?php echo $item->Currency_Id; ?>"><?php echo $item->Currency; ?></option>
                <?php endforeach; ?>
            </select><br>

            <label for="income">Income:</label><br>
            <input type="number" name="income" required="required"><br>
            <label for="expense">Expense:</label><br>
            <input type="number" name="expense" required="required"><br>
            <label for="comment">Comment:</label><br>
            <textarea name="comment"></textarea><br>
            <input type="submit" value="Submit">
          </form>
        </div>
      </div> 
    
     
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
