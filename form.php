<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <title>Php-Cu-Lab-1</title>
</head>

<body>
  <div class="foBody py-5">
    
    <div class="container col-5  m-auto p-3 px-4 rounded  border border-3  border-black">

      <h1 class="text-center mb-3"> Form Inputs </h1>
      <form method="get" action="display.php" class=" p-3 rounded border border-1  border-black">

        <div class="form-group mb-3">
          <label for="fname " class="mb-1 text-danger fw-bold">First Name :</label>
          <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="fname" placeholder="Enter First Name">
        </div>

        <div class="form-group mb-3">
          <label for="lname" class="mb-1 text-danger fw-bold">Last Name :</label>
          <input type="text" name="lname" class="form-control" id="exampleInputEmail1" aria-describedby="lname" placeholder="Enter Last Name">
        </div>

        <div class="form-group mb-3">
          <label for="address" class="mb-1 text-danger fw-bold">Address :</label>
          <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="address" placeholder="Enter Address">
        </div>

        <label for="address" class="mb-1 text-danger fw-bold">Country :</label>
        <select class="form-select mb-4" aria-label="Default select example" name="country">
          <option selected class="text-danger fw-bold">Select Your Country</option>
          <option value="egy">Egypt</option>
          <option value="fra">France</option>
          <option value="ger">Germany</option>
        </select>

        <div class="rad d-flex mb-3">
          <label for="gen " class="text-danger fw-bold w-25">Gender :</label>

          <div class="ra mb-3 d-flex">
            <div class="form-check d-flex me-4 ">
              <input class="form-check-input me-3" type="radio" name="gender" id="male" value="male">
              <label class="form-check-label" for="male">
                Male
              </label>
            </div>
            <div class="form-check d-flex  ">
              <input class="form-check-input me-3" type="radio" name="gender" id="male" value="female">
              <label class="form-check-label" for="female">
                Female
              </label>
            </div>
          </div>

        </div>


        <div class="che d-flex mb-3">
          <label for="sk" class="text-danger fw-bold w-25"> Skills :</label>

          <div class="sk d-flex flex-wrap w-50 ">

            <div class="form-check form-check-inline w-25 mb-3">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="skill[]" value="PHP">
              <label class="form-check-label" for="inlineCheckbox1">PHP</label>
            </div>
            <div class="form-check form-check-inline w-50 mb-3">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="skill[]" value="MYSQL">
              <label class="form-check-label" for="inlineCheckbox2">MYSQL</label>
            </div>
            <div class="form-check form-check-inline w-25 mb-3" ">
        <input class=" form-check-input" type="checkbox" id="inlineCheckbox3" name="skill[]" value="JS-ES6">
              <label class="form-check-label" for="inlineCheckbox3">JS6</label>
            </div>
            <div class="form-check form-check-inline w-50 mb-3">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="skill[]" value="POSTGREESQL">
              <label class="form-check-label" for="inlineCheckbox3">POSTGREESQL</label>
            </div>

          </div>
        </div>

        <div class="form-group mb-3">
          <label for="fname" class="mb-1 text-danger fw-bold">UserName :</label>
          <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="fname" placeholder="Enter UserName">
        </div>

        <div class="form-group mb-3">
          <label for="lname" class="mb-1 text-danger fw-bold">Password :</label>
          <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="lname" placeholder="Enter Password">
        </div>

        <div class="form-group mb-3">
          <label for="address" class="mb-1 text-danger fw-bold">Department :</label>
          <input type="text" name="dept" class="form-control" readonly value="IS" id="exampleInputEmail1" aria-describedby="address" placeholder="IS">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>

  </div>
</body>

</html>