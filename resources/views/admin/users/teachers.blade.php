@extends('layout.admin')

@section('content')
<div class="content container-fluid">
  <!-- Page Header -->
  <div class="page-header">
    <div class="row align-items-end">
      <div class="col-sm mb-2 mb-sm-0">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-no-gutter">
            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </nav>

        <h1 class="page-header-title">Giảng viên</h1>
      </div>

      <div class="col-sm-auto">
        <a class="btn btn-primary" href="{{ route('admin.user.create') }}">
          <i class="tio-user-add mr-1"></i> thêm người dùng
        </a>
      </div>
    </div>
    <!-- End Row -->
  </div>
  <!-- End Page Header -->


  <!-- Card -->
  <div class="card">
    <!-- Header -->
    <div class="card-header">
      <div class="row justify-content-between align-items-center flex-grow-1">
        <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
          <form>
            <!-- Search -->
            <div class="input-group input-group-merge input-group-flush">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="tio-search"></i>
                </div>
              </div>
              <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
            </div>
            <!-- End Search -->
          </form>
        </div>

        <div class="col-sm-6">
          <div class="d-sm-flex justify-content-sm-end align-items-sm-center">
            <!-- Datatable Info -->
            <div id="datatableCounterInfo" class="mr-2 mb-2 mb-sm-0" style="display: none;">
              <div class="d-flex align-items-center">
                <span class="font-size-sm mr-3">
                  <span id="datatableCounter">0</span>
                  Selected
                </span>
                <button class="btn btn-sm btn-outline-danger" type="submit" href="javascript:;">
                  <i class="tio-delete-outlined"></i> Delete
                </button>
              </div>
            </div>
            <!-- End Datatable Info -->

            <!-- Unfold -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;" data-hs-unfold-options='{
                   "target": "#usersFilterDropdown",
                   "type": "css-animation",
                   "smartPositionOff": true
                 }'>
                <i class="tio-filter-list mr-1"></i> Filter <span class="badge badge-soft-dark rounded-circle ml-1">2</span>
              </a>

              <div id="usersFilterDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right dropdown-card card-dropdown-filter-centered" style="min-width: 22rem;">
                <!-- Card -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-header-title">Tìm kiếm</h5>

                    <!-- Toggle Button -->
                    <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-secondary ml-2" href="javascript:;" data-hs-unfold-options='{
                        "target": "#usersFilterDropdown",
                        "type": "css-animation",
                        "smartPositionOff": true
                       }'>
                      <i class="tio-clear tio-lg"></i>
                    </a>
                    <!-- End Toggle Button -->
                  </div>

                  <div class="card-body">
                    <form>
                      <div class="form-group">
                        <small class="text-cap mb-2">Role</small>

                        <div class="form-row">
                          <div class="col">
                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="usersFilerCheck1" checked="">
                              <label class="custom-control-label" for="usersFilerCheck1">All</label>
                            </div>
                            <!-- End Checkbox -->
                          </div>

                          <div class="col">
                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="usersFilerCheck2">
                              <label class="custom-control-label" for="usersFilerCheck2">Employee</label>
                            </div>
                            <!-- End Checkbox -->
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>

                      <div class="form-row">
                        <div class="col-sm form-group">
                          <small class="text-cap mb-2">Position</small>

                          <!-- Select -->
                          <select class="js-select2-custom js-datatable-filter custom-select" size="1" style="opacity: 0;" data-target-column-index="2" data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity"
                                  }'>
                            <option value="">Any</option>
                            <option value="Accountant">Accountant</option>
                            <option value="Co-founder">Co-founder</option>
                            <option value="Designer">Designer</option>
                            <option value="Developer">Developer</option>
                            <option value="Director">Director</option>
                          </select>
                          <!-- End Select -->
                        </div>

                        <div class="col-sm form-group">
                          <small class="text-cap mb-2">Status</small>

                          <!-- Select -->
                          <select class="js-select2-custom js-datatable-filter custom-select" size="1" style="opacity: 0;" data-target-column-index="4" data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity"
                                  }'>
                            <option value="">Any status</option>
                            <option value="Active" data-option-template='<span class="legend-indicator bg-success"></span>Active'>Active</option>
                            <option value="Pending" data-option-template='<span class="legend-indicator bg-warning"></span>Pending'>Pending</option>
                            <option value="Suspended" data-option-template='<span class="legend-indicator bg-danger"></span>Suspended'>Suspended</option>
                          </select>
                          <!-- End Select -->
                        </div>


                      </div>
                      <!-- End Row -->

                      <a class="js-hs-unfold-invoker btn btn-block btn-primary" href="javascript:;" data-hs-unfold-options='{
                          "target": "#usersFilterDropdown",
                          "type": "css-animation",
                          "smartPositionOff": true
                         }'>Apply</a>
                    </form>
                  </div>
                </div>
                <!-- End Card -->
              </div>
            </div>
            <!-- End Unfold -->
          </div>
        </div>
      </div>
      <!-- End Row -->
    </div>
    <!-- End Header -->

    <!-- Table -->
    <div class="table-responsive datatable-custom">
      <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
               "columnDefs": [{
                  "targets": [0, 5],
                  "orderable": false
                }],
               "order": [],
               "info": {
                 "totalQty": "#datatableWithPaginationInfoTotalQty"
               },
               "search": "#datatableSearch",
               "entries": "#datatableEntries",
               "pageLength": 15,
               "isResponsive": false,
               "isShowPaging": false,
               "pagination": "datatablePagination"
             }'>
        <thead class="thead-light">
          <tr>
            <th class="table-column-pr-0">
              <div class="custom-control custom-checkbox">
                <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                <label class="custom-control-label" for="datatableCheckAll"></label>
              </div>
            </th>
            <th class="table-column-pl-0">Tên</th>
            <th>SĐT</th>
            <th>Ngày sinh</th>
            <th>Giới thiệu</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($teachers as $item)
          <tr>
            <td class="table-column-pr-0">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="{{$item->id}}" name="employee_ids[]" value="{{ $item->Employee_ID }}">
                <label class="custom-control-label" for="{{$item->id}}"></label>
              </div>
            </td>
            <td class="table-column-pl-0">
              <a class="d-flex align-items-center" href="user-profile.html">
                <div class="avatar avatar-circle">
                  <img class="avatar-img" src="{{ asset($item->avatar) }}" alt="Image Description">
                </div>
                <div class="ml-3">
                  <span class="d-block h5 text-hover-primary mb-0">{{ $item->full_name }}<i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                  <span class="d-block font-size-sm text-body">{{ $item->email }}</span>
                </div>
              </a>
            </td>
                <td>
                <span class="d-block h5 mb-0">{{ $item->phone }}</span>
            </td>
            <td><span class="d-block h5 mb-0">{{ $item->birthday }}</span></td>
            <td>
              <span class="d-block h5 mb-0">{{ $item->bio }}</span>
            </td>
            
            <td>
              <div id="editUserPopover" data-toggle="popover-dark" data-placement="left" title="<div class='d-flex align-items-center'>Edit user <a href='#!' class='close close-light ml-auto'><i id='closeEditUserPopover' class='tio-clear'></i></a></div>" data-content="Check out this Edit user modal example." data-html="true">
                <a class="btn btn-sm btn-white" href="{{route('admin.user.edit', $item->id)}}" >
                  <i class="tio-edit"></i> sửa
                </a>
                <a class="btn btn-sm btn-white" href="{{route('admin.user.delete', $item->id)}}" >
                  <i class="tio-delete"></i> xoá
                </a>
              </div>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
    <!-- End Table -->

    <!-- Footer -->
    <div class="card-footer">
      <!-- Pagination -->
      <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
        <div class="col-sm mb-2 mb-sm-0">
          <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
            <span class="mr-2">Showing:</span>

            <!-- Select -->
            <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                      "minimumResultsForSearch": "Infinity",
                      "customClass": "custom-select custom-select-sm custom-select-borderless",
                      "dropdownAutoWidth": true,
                      "width": true
                    }'>
              <option value="10">10</option>
              <option value="15" selected="">15</option>
              <option value="20">20</option>
            </select>
            <!-- End Select -->

            <span class="text-secondary mr-2">of</span>

            <!-- Pagination Quantity -->
            <span id="datatableWithPaginationInfoTotalQty"></span>
          </div>
        </div>

        <div class="col-sm-auto">
          <div class="d-flex justify-content-center justify-content-sm-end">
            <!-- Pagination -->
            <nav id="datatablePagination" aria-label="Activity pagination"></nav>
          </div>
        </div>
      </div>
      <!-- End Pagination -->
    </div>
    <!-- End Footer -->
  </div>
  <!-- End Card -->
</div>
@endsection