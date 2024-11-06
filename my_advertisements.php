<?php
 include "header.php";
 $user_id = 6;
 $stmt = $conn->prepare("select * from houses where user_id=?");
 $stmt->bind_param('i', $user_id);
 $stmt->execute();
 $houses = $stmt->get_result();
 
 ?>
            <a href="add_update_new_advertise.php" class="btn btn-primary col-2">إضافة</a>
        <h2 class="text-center">إدارة العقارات </h2>
     
        <!-- Display Houses Table -->
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>الرقم</th>
                    <th>العنوان</th>
                    <th>السعر</th>
                    <th>المساحة</th>
                    <th>الوصف</th>
                    <th>الموقع</th>
                    <th>الحالة</th>
                    <th>العمليات</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($house = $houses->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $house['id']; ?></td>
                        <td><?php echo $house['title']; ?></td>
                        <td><?php echo $house['price']; ?></td>
                        <td><?php echo $house['distance']; ?></td>
                        <td><?php echo $house['description']; ?></td>
                        <td><?php echo $house['location']; ?></td>
                        <td><?php echo $house['status'] ? 'Active' : 'Inactive'; ?></td>
                        <td>
                            <a href="add_update_new_advertise.php?edit=<?php echo $house['id']; ?>" class="btn btn-info btn-sm">تعدبل</a>
                            <a href="crud_advertisement.php?delete=<?php echo $house['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">حذف</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    
<?php include "footer.php"; ?>