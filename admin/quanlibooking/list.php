<table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Ghi chú</th>
                        <th>Name xe</th>
                        <th>Khung giờ</th>
                    </tr>

                    <?php
                     foreach ($listbooking as $danhmucbooking){
                        extract($danhmucbooking);
                        echo ' <tr>
                        <td>'.$id.'</td>
                        <td>'.$namebook.'</td>
                        <td>'.$mailbook.'</td>
                        <td>'.$telbook.'</td>
                        <td>'.$notebook.'</td>
                        <td>'.$xebook.'</td>
                        <td>'.$timebook.'</td>
                    </tr>
                        ';
                     }
                    
                    ?>

                
                </table>

                <style>
                    table{
                        border: none;
                    }
                        
    th{
        background-color: #cccccc;
        padding: 10px 0px;
    }

    td{
        border: 1px solid #ccc;
    }

    
    th:nth-child(1){
        width: 1%;
    }
    th:nth-child(2){
        width: 15%;
    }
    th:nth-child(3){
        width: 10%;
    }
    th:nth-child(4){
        width: 10%;
    }
    th:nth-child(5){
        width: 20%;
    }
   
    th:nth-child(6){
        width: 15%;
    }
    th:nth-child(7){
        width: 15%;
    }


    td:nth-child(1){
        width: 1%;;
        text-align: center;
    }
    td:nth-child(2){
        width: 9%;;
        text-align: center;
    }
    td:nth-child(3){
        width: 10%;
        text-align: center;;
    }
    td:nth-child(4){
        width: 10%;
        text-align: center;;
    }
    td:nth-child(5){
        width: 15%;
        text-align: center;;
    }
   
    td:nth-child(6){
        width: 15%;
        text-align: center;;
    }
    td:nth-child(7){
        width: 15%;
        text-align: center;;
    }

                </style>