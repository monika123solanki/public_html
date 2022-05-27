@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('users_details');
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="view" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="card-4 bg-light mb-3" >
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-auto " >
                    <div class="row  q-col-gutter-sm q-px-sm" >
                        <div class="col">
                            <div class="h5 font-weight-bold text-primary">{{ __('users_details') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div  class="mb-3" >
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid" >
                    <?php Html::display_page_errors($errors); ?>
                    <div  class="card-4 page-content" >
                        <?php
                            $counter = 0;
                            if($data){
                            $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                            $counter++;
                        ?>
                        <div id="page-main-content" class="">
                            <div class="row">
                                <div class="col">
                                    <!-- Table Body Start -->
                                    <div class="page-data">
                                        <!--PageComponentStart-->
                                        <div class="border-top td-id p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('id') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['id'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-first_name p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('first_name') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['first_name'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-last_name p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('last_name') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['last_name'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-profile_picture p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('profile_picture') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php 
                                                            Html :: page_img($data['profile_picture'],400,400, "", "", 1); 
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-email p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('email') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['email'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-special_instruction p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('special_instruction') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['special_instruction'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-mobile_number p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('mobile_number') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['mobile_number'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-state_id p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('state_id') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['state_id'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-role_id p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('role_id') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['role_id'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-city_id p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('city_id') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['city_id'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-created_at p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('created_at') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['created_at'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-updated_at p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('updated_at') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['updated_at'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--PageComponentEnd-->
                                        <div class="d-flex q-col-gutter-xs justify-end">
                                            <div class="dropdown" >
                                                <button data-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="material-icons">menu</i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("users/edit/$rec_id"); ?>">
                                                    <i class="material-icons">edit</i> {{ __('edit') }}
                                                </a>
                                                <a class="dropdown-item record-delete-btn" data-prompt-msg="{{ __('are_you_sure_you_want_to_delete_this_record') }}" data-display-style="modal" href="<?php print_link("users/delete/$rec_id"); ?>">
                                                <i class="material-icons">clear</i> {{ __('delete') }}
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Body End -->
                        </div>
                    </div>
                </div>
                <?php
                    }
                    else{
                ?>
                <!-- Empty Record Message -->
                <div class="text-muted p-3">
                    <i class="material-icons">block</i> {{ __('no_record_found') }}
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
@section('pagecss')
<style>
	/**
	body{
			
	}
	*/
</style>
@endsection
@section('pagejs')
<script>
	/*
	* Page Custom Javascript | Jquery codes
	*/

	//$(document).ready(function(){
	//	
	//});
</script>

@endsection
