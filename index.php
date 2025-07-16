<?php include "./includes/header.php" ?>




<h1>This is the navbar</h1>
<!---->
<div class="container col-8">
<form method="post" action="receive.php" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="inputEmail4">
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input name="address" type="text"  class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input name="city" type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Province</label>
    <select id="inputState" class="form-select">
      <option disabled selected>Choose...</option>
        <option>Alberta</option>
        <option>British Columbia</option>
        <option> Manitoba </option>
        <option> New Brunswick</option>
        <option> Newfoundland and Labrador</option>
        <option>Northwest Territories</option>
        <option> Nova Scotia</option>
        <option> Nunavut</option>
        <option> Ontario</option>
        <option> Prince Edward Island</option>
        <option>Quebec</option>
        <option> Saskatchewan</option>
        <option> Yukon</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Area Code</label>
    <input name="area_code" type="text" class="form-control" id="inputZip" required>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
<!---->
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-8">
                    <a href="viewrecords.php" class="btn btn-info w-100">View Records</a>
        </div>
    </div>
</div>

<?php require "./includes/footer.php" ?>