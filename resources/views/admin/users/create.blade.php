@extends('layout.admin')
@section('content')

<form method="POST" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Step Form -->
      <form class="js-step-form py-md-5" data-hs-step-form-options='{
              "progressSelector": "#addUserStepFormProgress",
              "stepsSelector": "#addUserStepFormContent",
              "endSelector": "#addUserFinishBtn",
              "isValidate": false
            }'  >
        <div class="row justify-content-lg-center">
          <div class="col-lg-8">


            <!-- Content Step Form -->
            <div id="addUserStepFormContent" >
              <!-- Card -->
             
              @csrf
              <div id="addUserStepProfile" class="card card-lg active" >
                <!-- Body -->
                <div  class="card-body">
                  
                    
                   
                  <!-- Form Group -->


                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Tên</label>

                    <div class="col-sm-9">
                      <div class="input-group input-group-sm-down-break">
                        <input type="text" class="form-control"  id="Name" name="full_name" placeholder="full name">
                        
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Mail</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control"  id="Mail" name="email" placeholder="mail@gmail.com" >
                    </div>
                  </div>
                  <!-- End Form Group -->
                  <!-- Form Group -->
                  
                  <div class="row form-group">
                    <label for="phone" class="col-sm-3 col-form-label input-label">SĐT</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control"  id="Phone" name="phone" placeholder="" >
                    </div>
                  </div>
                  <!-- End Form Group -->
                  <!-- Form Group -->
                  <div class=" row form-group" >
                    <label for="job" class="col-sm-3 col-form-label input-label">Ngày sinh </label>

                    <div class="col-sm-9">
                      <div class="input-group input-group-sm-down-break align-items-center">
                        <input type="date" class="js-masked-input form-control"  id="Job"  name="birthday" placeholder="">

                        
                      </div>

                      <!-- Container For Input Field -->
                      


                    </div>
                  </div>
                  <!-- Form Group -->
                  
                  <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label" >vai trò</label>

                    <div class="col-sm-9">
                      <select name="role" id="role" class="custom-select">
                        <option value="st">học viên</option>
                        <option value="tc">giảng viên</option>
                        <option value="ad">quản trị viên</option>
                      </select>
                    </div>
                  </div>
                  <!-- End Form Group -->


                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="AddressLabel" class="col-sm-3 col-form-label input-label">giới thiêu</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control"  id="Address" name="bio" placeholder="">
                    </div>
                  </div>
                  <!-- End Form Group -->



                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label input-label">Avatar</label>

                    <div class="col-sm-9">
                      <div class="d-flex align-items-center">
                        <!-- Avatar -->
                        <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="avatarUploader">
                          <img id="avatarImg" class="avatar-img" src="{{asset('')}}assets\img\160x160\img1.jpg" alt="Image Description">

                          <input type="file" name="avatar" class="js-file-attach avatar-uploader-input" id="avatarUploader" data-hs-file-attach-options='{
                                    "textTarget": "#avatarImg",
                                    "mode": "image",
                                    "targetAttr": "src",
                                    "resetTarget": ".js-file-attach-reset-img",
                                    "resetImg": "{{asset("")}}assets/img/160x160/img1.jpg",
                                    "allowTypes": [".png", ".jpeg", ".jpg"]
                                 }'>

                          <span class="avatar-uploader-trigger">
                            <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                          </span>
                        </label>
                        <!-- End Avatar -->

                        <button type="button" class="js-file-attach-reset-img btn btn-white">Delete</button>
                      </div>
                    </div>
                  </div>
                    
                    
                  
                 
                  

                  


                  <!-- End Form Group -->
                </div> 
                <!-- End Body -->

                <!-- Footer -->
                <div class="card-footer d-flex justify-content-end align-items-center">
                  <div class="ml-auto">
                    
                    <button  type="submit" class="btn btn-primary">Thêm người dùng</button>
                  </div>
                  {{-- <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                            "targetSelector": "#addUserStepConfirmation"
                          }'>
                    Next <i class="tio-chevron-right"></i>
                  </button> --}}
                </div> 
              </form>
                  
                <!-- End Footer -->
              </div>
             
              <!-- End Card -->




            </div>
            <!-- End Content Step Form -->

            <!-- Message Body -->

            <!-- End Message Body -->
          </div>
        </div>
        <!-- End Row -->
      </form>
      <!-- End Step Form -->
    </div>
    <!-- End Content -->

</form>

@endsection