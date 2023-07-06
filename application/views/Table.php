<head>
  <title>Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<div class="row">

<div class="col-md-6 mx-auto">
        <table class="table table-striped table-bordered table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Comment</th>
              <th scope="col">Income</th>
              <th scope="col">Expense</th>
              <th scope="col">Remaining Money</th>
              <th scope="col">Currency Id</th>
              <th scope="col">Delete</th>

            </tr>
          </thead>
          <tbody>
                   <?php foreach ($SendArrayToView as $item): ?>
              <tr>
                    <td><?php echo $item->Comment; ?></td>
                   <td><?php echo $item->Income; ?></td>
                      <td><?php echo $item->Expense; ?></td>
                   <td><?php echo $item->RemainingMoney; ?></td>
                      <td><?php echo $item->Currency_Id; ?></td>
                      <td>
                             <a href="<?php echo base_url("Home/Delete/{$item->Id}"); ?>" class="btn btn-danger">Delete</a>
                    </td>
                   </tr>
                       <?php endforeach; ?>
         </tbody>

        </table>
      </div>
      </div>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
