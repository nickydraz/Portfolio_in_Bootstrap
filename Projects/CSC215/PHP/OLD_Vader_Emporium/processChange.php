<?php
 session_start();

 function ImportCSV2Array($filename)
 {
    $row = 0;
    $col = 0;

    $handle = @fopen($filename, "r");
    if ($handle)
    {
        while (($row = fgetcsv($handle, 4096)) !== false)
        {
            if (empty($fields))
            {
                $fields = $row;
                continue;
            }

            foreach ($row as $k=>$value)
            {
                $results[$col][$fields[$k]] = $value;
            }
            $col++;
            unset($row);
        }
        if (!feof($handle))
        {
            echo "Error: unexpected fgets() failn";
        }
        fclose($handle);
    }

    return $results;
  }

$fileName = "users.csv";
$csvArray = ImportCSV2Array($fileName);
$fp = fopen($fileName, "w");
fputcsv($fp, array("username", "password", "name", "email", "address"));

foreach($csvArray as $row)
{
  if ($_SESSION["username"] == $row["username"])
  {
    if ($_POST["password"] != "")
    {
      $row["password"]= $_POST["password"];
    }

    if ($_POST["name"] != "")
    {
      $row["name"]= $_POST["name"];
    }

    if ($_POST["email"] != "")
    {
      $row["email"] = $_POST["email"];
    }

    if ($_POST["address"] != "")
    {
      $row["address"] = $_POST["address"];
    }
  }
  fputcsv($fp, array($row["username"], $row["password"], $row["name"], $row["email"], $row["address"]));
}

fclose($fp);
header('Location:admin.php');
  ?>
