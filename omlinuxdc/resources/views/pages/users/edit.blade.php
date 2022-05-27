@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('edit_users');
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="edit" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="card-4 bg-light mb-3" >
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-auto " >
                    <div class="row  q-col-gutter-sm q-px-sm" >
                        <div class="col">
                            <div class="h5 font-weight-bold text-primary">{{ __('edit_users') }}</div>
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
                <div class="col-md-9 comp-grid" >
                    <?php Html::display_page_errors($errors); ?>
                    <div  class="card-4 page-content" >
                        <div class="row">
                            <div class="col">
                                <!--[form-start]-->
                                <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("users/edit/$rec_id"); ?>" method="post">
                                <!--[form-content-start]-->
                                @csrf
                                <div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="first_name">{{ __('first_name') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-first_name-holder" class=" ">
                                                    <input id="ctrl-first_name"  value="<?php  echo $data['first_name']; ?>" type="text" placeholder="{{ __('enter_first_name') }}" list="first_name_list"  required="" name="first_name"  class="form-control " />
                                                    <datalist id="first_name_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['first_name'];
                                                        if(!empty($options)){
                                                        foreach($options as $option){
                                                        $value = $option['value'];
                                                        $label = $option['label'];
                                                        $selected = Html::get_record_selected($field_value, $value);
                                                    ?>
                                                    <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                    <?php echo $label ?>
                                                    </option>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="last_name">{{ __('last_name') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-last_name-holder" class=" ">
                                                    <input id="ctrl-last_name"  value="<?php  echo $data['last_name']; ?>" type="text" placeholder="{{ __('enter_last_name') }}" list="last_name_list"  required="" name="last_name"  class="form-control " />
                                                    <datalist id="last_name_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['last_name'];
                                                        if(!empty($options)){
                                                        foreach($options as $option){
                                                        $value = $option['value'];
                                                        $label = $option['label'];
                                                        $selected = Html::get_record_selected($field_value, $value);
                                                    ?>
                                                    <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                    <?php echo $label ?>
                                                    </option>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="profile_picture">{{ __('profile_picture') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-profile_picture-holder" class=" ">
                                                    <div class="dropzone required" input="#ctrl-profile_picture" fieldname="profile_picture" uploadurl="{{ url('fileuploader/upload/profile_picture') }}"    data-multiple="false" dropmsg="{{ __('choose_files_or_drop_files_here') }}"    btntext="{{ __('browse') }}" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                        <input name="profile_picture" id="ctrl-profile_picture" required="" class="dropzone-input form-control" value="<?php  echo $data['profile_picture']; ?>" type="text"  />
                                                        <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('please_a_choose_file') }}</div>-->
                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                    </div>
                                                </div>
                                                <?php Html :: uploaded_files_list($data['profile_picture'], '#ctrl-profile_picture'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="email">{{ __('email') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-email-holder" class=" ">
                                                    <input id="ctrl-email"  value="<?php  echo $data['email']; ?>" type="email" placeholder="{{ __('enter_email') }}" list="email_list"  required="" name="email"  class="form-control " />
                                                    <datalist id="email_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['email'];
                                                        if(!empty($options)){
                                                        foreach($options as $option){
                                                        $value = $option['value'];
                                                        $label = $option['label'];
                                                        $selected = Html::get_record_selected($field_value, $value);
                                                    ?>
                                                    <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                    <?php echo $label ?>
                                                    </option>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="special_instruction">{{ __('special_instruction') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-special_instruction-holder" class=" ">
                                                    <input id="ctrl-special_instruction"  value="<?php  echo $data['special_instruction']; ?>" type="text" placeholder="{{ __('enter_special_instruction') }}" list="special_instruction_list"  required="" name="special_instruction"  class="form-control " />
                                                    <datalist id="special_instruction_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['special_instruction'];
                                                        if(!empty($options)){
                                                        foreach($options as $option){
                                                        $value = $option['value'];
                                                        $label = $option['label'];
                                                        $selected = Html::get_record_selected($field_value, $value);
                                                    ?>
                                                    <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                    <?php echo $label ?>
                                                    </option>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="mobile_number">{{ __('mobile_number') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-mobile_number-holder" class=" ">
                                                    <input id="ctrl-mobile_number"  value="<?php  echo $data['mobile_number']; ?>" type="text" placeholder="{{ __('enter_mobile_number') }}" list="mobile_number_list"  required="" name="mobile_number"  class="form-control " />
                                                    <datalist id="mobile_number_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['mobile_number'];
                                                        if(!empty($options)){
                                                        foreach($options as $option){
                                                        $value = $option['value'];
                                                        $label = $option['label'];
                                                        $selected = Html::get_record_selected($field_value, $value);
                                                    ?>
                                                    <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                    <?php echo $label ?>
                                                    </option>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="state_id">{{ __('state_id') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-state_id-holder" class=" ">
                                                    <input id="ctrl-state_id"  value="<?php  echo $data['state_id']; ?>" type="number" placeholder="{{ __('enter_state_id') }}" step="any" list="state_id_list"  required="" name="state_id"  class="form-control " />
                                                    <datalist id="state_id_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['state_id'];
                                                        if(!empty($options)){
                                                        foreach($options as $option){
                                                        $value = $option['value'];
                                                        $label = $option['label'];
                                                        $selected = Html::get_record_selected($field_value, $value);
                                                    ?>
                                                    <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                    <?php echo $label ?>
                                                    </option>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="role_id">{{ __('role_id') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-role_id-holder" class=" ">
                                                    <input id="ctrl-role_id"  value="<?php  echo $data['role_id']; ?>" type="number" placeholder="{{ __('enter_role_id') }}" step="any" list="role_id_list"  required="" name="role_id"  class="form-control " />
                                                    <datalist id="role_id_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['role_id'];
                                                        if(!empty($options)){
                                                        foreach($options as $option){
                                                        $value = $option['value'];
                                                        $label = $option['label'];
                                                        $selected = Html::get_record_selected($field_value, $value);
                                                    ?>
                                                    <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                    <?php echo $label ?>
                                                    </option>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="city_id">{{ __('city_id') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-city_id-holder" class=" ">
                                                    <input id="ctrl-city_id"  value="<?php  echo $data['city_id']; ?>" type="number" placeholder="{{ __('enter_city_id') }}" step="any" list="city_id_list"  required="" name="city_id"  class="form-control " />
                                                    <datalist id="city_id_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['city_id'];
                                                        if(!empty($options)){
                                                        foreach($options as $option){
                                                        $value = $option['value'];
                                                        $label = $option['label'];
                                                        $selected = Html::get_record_selected($field_value, $value);
                                                    ?>
                                                    <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                    <?php echo $label ?>
                                                    </option>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-ajax-status"></div>
                                <!--[form-content-end]-->
                                <!--[form-button-start]-->
                                <div class="form-group text-center">
                                    <button class="btn btn-primary" type="submit">
                                    {{ __('update') }}
                                    <i class="material-icons">send</i>
                                    </button>
                                </div>
                                <!--[form-button-end]-->
                            </form>
                            <!--[form-end]-->
                        </div>
                    </div>
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
