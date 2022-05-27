@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('edit_tasks');
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
                            <div class="h5 font-weight-bold text-primary">{{ __('edit_tasks') }}</div>
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
                                <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tasks/edit/$rec_id"); ?>" method="post">
                                <!--[form-content-start]-->
                                @csrf
                                <div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="user_id">{{ __('user_id') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-user_id-holder" class=" ">
                                                    <input id="ctrl-user_id"  value="<?php  echo $data['user_id']; ?>" type="number" placeholder="{{ __('enter_user_id') }}" step="any" list="user_id_list"  required="" name="user_id"  class="form-control " />
                                                    <datalist id="user_id_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['user_id'];
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
                                                <label class="control-label" for="task_name">{{ __('task_name') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-task_name-holder" class=" ">
                                                    <input id="ctrl-task_name"  value="<?php  echo $data['task_name']; ?>" type="text" placeholder="{{ __('enter_task_name') }}" list="task_name_list"  required="" name="task_name"  class="form-control " />
                                                    <datalist id="task_name_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['task_name'];
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
                                                <label class="control-label" for="task_description">{{ __('task_description') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-task_description-holder" class=" ">
                                                    <textarea placeholder="{{ __('enter_task_description') }}" id="ctrl-task_description"  required="" rows="5" name="task_description" class=" form-control"><?php  echo $data['task_description']; ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('please_enter_text') }}</div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="task_status">{{ __('task_status') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-task_status-holder" class=" ">
                                                    <input id="ctrl-task_status"  value="<?php  echo $data['task_status']; ?>" type="text" placeholder="{{ __('enter_task_status') }}" list="task_status_list"  required="" name="task_status"  class="form-control " />
                                                    <datalist id="task_status_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['task_status'];
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
                                                <label class="control-label" for="select_location">{{ __('select_location') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-select_location-holder" class=" ">
                                                    <select required=""  id="ctrl-select_location" name="select_location"  placeholder="{{ __('select_a_value') }}"    class="custom-select" >
                                                    <option value="">{{ __('select_a_value') }}</option>
                                                    <?php
                                                        $options = $comp_model->select_location_option_list() ?? [];
                                                        foreach($options as $option){
                                                        $value = $option->value;
                                                        $label = $option->label ?? $value;
                                                        $selected = ( $value == $data['select_location'] ? 'selected' : null );
                                                    ?>
                                                    <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                                    <?php echo $label; ?>
                                                    </option>
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
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
