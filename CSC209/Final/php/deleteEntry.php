<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uname = $_POST["uname"];
    $index = intval($_POST["index"]);

    $user_dir = "../outputFinal/$uname";
    $user_file_path = "$user_dir/user.json";

    if (file_exists($user_file_path)) {
        $user_data = json_decode(file_get_contents($user_file_path));

        if (isset($user_data->entries[$index])) {
            array_splice($user_data->entries, $index, 1); 
            file_put_contents($user_file_path, json_encode($user_data));
            echo "Entry deleted successfully.";
        } 
    } 
} else {
    echo "Invalid request.";
}
?>
