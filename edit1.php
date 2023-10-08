<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVEL</title>

  
</head>
<body>
<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <?php
    $connect = mysqli_connect('localhost', 'root','', 'travel_db');
    if(isset($_GET['id'])){
        $travel_id = mysqli_real_escape_string($connect,$_GET['id']);
        $query ="SELECT * FROM book_form WHERE id = '$travel_id' ";
        $query_run = mysqli_query($connect, $query);

        if(mysqli_num_rows($query_run) > 0){
            $travel = mysqli_fetch_array($query_run);
            ?>
            <form action="book-form.php" method="POST">
                <input type = "hidden" name = "travel_id" value = "<?=$travel['id']; ?>">
      <div class="formbold-form-title">
        <h2 class="">Register now</h2>

      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="firstname" class="formbold-form-label">
            Last name
          </label>
          <input
            type="text"
            name="lname"
            value = "<?=$travel['lname'];?>"
            id="firstname"
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="lastname" class="formbold-form-label"> First name </label>
          <input
            type="text"
            name="fname"
            value = "<?=$travel['fname'];?>"
            id="lastname"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="text" class="formbold-form-label"> Phone </label>
          <input
            type="text"
            name="phone"
            value = "<?=$travel['phone'];?>"
            id="email"
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="phone" class="formbold-form-label"> Address </label>
          <input
            type="text"
            name="address"
            value = "<?=$travel['address'];?>"
            id="phone"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-mb-3">
        <label for="address" class="formbold-form-label">
          Location
        </label>
        <input
          type="text"
          name="location"
          value = "<?=$travel['location'];?>"
          id="address"
          class="formbold-form-input"
        />
      </div>

      <div class="formbold-mb-3">
        <label for="address2" class="formbold-form-label">
          Guests
        </label>
        <input
          type="text"
          name="guests"
          value = "<?=$travel['guests'];?>"
          id="address2"
          class="formbold-form-input"
        />
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="state" class="formbold-form-label"> Arrivals </label>
          <input
            type="text"
            name="arrivals"
            value = "<?=$travel['arrivals'];?>"
            id="state"
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="country" class="formbold-form-label"> leaving </label>
          <input
            type="text"
            name="leaving"
            value = "<?=$travel['leaving'];?>"
            id="country"
            class="formbold-form-input"
          />
        </div>
      </div>
      <button type = "submit" name = "details-update" class="formbold-btn">Update</button>
      <a href="edit.php" class="formbold-btn">Back</a>
    </form>
    <?php
        }
    }
    ?>

    
  </div>
</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Inter', sans-serif;
  }
  .formbold-mb-3 {
    margin-bottom: 15px;
  }
  .formbold-relative {
    position: relative;
  }
  .formbold-opacity-0 {
    opacity: 0;
  }
  .formbold-stroke-current {
    stroke: currentColor;
  }
  #supportCheckbox:checked ~ div span {
    opacity: 1;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 40px;
  }

  .formbold-img {
    margin-bottom: 45px;
  }

  .formbold-form-title {
    margin-bottom: 30px;
  }
  .formbold-form-title h2 {
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;
    color: #07074d;
  }
  .formbold-form-title p {
    font-size: 16px;
    line-height: 24px;
    color: #536387;
    margin-top: 12px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }
  .formbold-form-input {
    text-align: center;
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #536387;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-checkbox-label {
    display: flex;
    cursor: pointer;
    user-select: none;
    font-size: 16px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-checkbox-label a {
    margin-left: 5px;
    color: #6a64f1;
  }
  .formbold-input-checkbox {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }
  .formbold-checkbox-inner {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    margin-right: 16px;
    margin-top: 2px;
    border: 0.7px solid #dde3ec;
    border-radius: 3px;
  }

  .formbold-btn {
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
    text-decoration: none;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
</style>
</body>
</html>