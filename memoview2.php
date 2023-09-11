<!DOCTYPE html>
<html>
<head>
  <title>Delete Data</title>
  <script>
    function deleteData(rowId) {
      if (confirm("Are you sure you want to delete this data?")) {
        // Send an AJAX request to delete the data from the server
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "delete_data.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // If successful, remove the row from the table
            document.getElementById(rowId).remove();
          }
        };
        xhr.send("id=" + rowId); // Send the row ID to the server
      }
    }
  </script>
</head>
<body>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Action</th>
  </tr>
  <tr id="row1">
    <td>1</td>
    <td>John Doe</td>
    <td><button onclick="deleteData('row1')">Delete</button></td>
  </tr>
  <tr id="row2">
    <td>2</td>
    <td>Jane Smith</td>
    <td><button onclick="deleteData('row2')">Delete</button></td>
  </tr>
  <!-- Add more rows as needed -->
</table>

</body>
</html>