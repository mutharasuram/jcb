<form action="{{url('add_vehi')}}"method="post">@csrf
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Vehicle Number</label>
                  <div class="col-sm-10">
                    <input type="text"name="v_no" class="form-control" id="inputText"required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Vehicle Company</label>
                  <div class="col-sm-10">
                    <input type="text" name="v_name"class="form-control" id="inputText"required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Owner Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="o_name"class="form-control" id="inputText"required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Year</label>
                  <div class="col-sm-10">
                    <input type="number" name="year"class="form-control" id="inputText"required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Fuel Type</label>
                  <div class="col-sm-10">
                  <select id="inputState" name="Fuel"class="form-select">
                    <option selected>Choose...</option>
                    <option>Petrol</option>
                    <option>Diesel</option>
                    <option>Gas</option>
                    <option>Eletric</option>
                  </select>
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                  <div class="col-sm-10">
                  <select id="inputState" name="Type"class="form-select">
                    <option selected>Choose...</option>
                    <option>First</option>
                    <option>Second</option>
                  </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Avg li/hr</label>
                  <div class="col-sm-10">
                    <input type="number" name="Avg"class="form-control" id="inputText"required>
                  </div>
                </div>

               

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Vehicle Cost</label>
                  <div class="col-sm-10">
                    <input type="number" name="cost"class="form-control" id="inputText"required>
                  </div>
                </div>

                

               
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>