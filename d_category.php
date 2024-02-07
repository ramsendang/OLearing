<?php 
require_once('backend/component/header.php');
require_once('backend/component/d_category__sidebar.php');
?>
    <div class="col-10">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Categories</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php 
            $categories = getAllCategories($conn);
            if($categories->num_rows>0){
                while($row = $categories->fetch_assoc()){
                ?>
                <tr>
                    <th scope="row"><?php echo $row["id"]; ?></th>
                    <td><?php echo $row["categoryName"]; ?></td>
                    <td><a href="deleteCategory.php?data=<?php echo urlencode($row['id']);?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
                }
            }else{
                echo "<tr> failed</tr>";
            }
            ?>
            
            </tbody>
      </table>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
        </ul>
      </nav>
    </div>
</div>