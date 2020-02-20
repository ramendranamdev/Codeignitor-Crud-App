<?php

    echo "<tbody>";

    foreach($this->user->getData() as $row)  {
      echo "<tr>";
      echo "<td>".$row->id."</td>";
      echo "<td>".$row->name."</td>";
      echo "<td>".$row->email."</td>";
      echo "<td>".$row->mobile."</td>";
      echo "<td>".$row->dob."</td>";
      echo "<td>".$row->pincode."</td>";
      echo "<td>"."

                <button
                  type='submit'
                  name='edit'
                  class='btn btn-success'
                  onclick='preFillEditForm()'
                  data-toggle='modal'
                  data-target='#editFormModal'>
                    Edit
                </button>

                <button
                  class='btn btn-danger'
                  value='".$row->id."'
                  onclick='preFillDeleteForm()'
                  data-toggle='modal'
                  data-target='#deleteFormModal'>
                  Romove
                </button>"

            ."</td>";
      // echo "<td>"."<button class='btn btn-warning' data-toggle='modal' data-target='#deleteFormModal'>Edit</button>"."</td>";
      echo "</tr>";
    }
    echo "</tbody>";
?>
