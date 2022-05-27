@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('edit_district');
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
                            <div class="h5 font-weight-bold text-primary">{{ __('edit_district') }}</div>
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
                                <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("district/edit/$rec_id"); ?>" method="post">
                                <!--[form-content-start]-->
                                @csrf
                                <div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="district_title">{{ __('district_title') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-district_title-holder" class=" ">
                                                    <input id="ctrl-district_title"  value="<?php  echo $data['district_title']; ?>" type="text" placeholder="{{ __('enter_district_title') }}" list="district_title_list"  required="" name="district_title"  class="form-control " />
                                                    <datalist id="district_title_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['district_title'];
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
                                                <label class="control-label" for="state_id">{{ __('state_id') }} </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-state_id-holder" class=" ">
                                                    <input id="ctrl-state_id"  value="<?php  echo $data['state_id']; ?>" type="number" placeholder="{{ __('enter_state_id') }}" step="any" list="state_id_list"  name="state_id"  class="form-control " />
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
                                                <label class="control-label" for="district_description">{{ __('district_description') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-district_description-holder" class=" ">
                                                    <textarea placeholder="{{ __('enter_district_description') }}" id="ctrl-district_description"  required="" rows="5" name="district_description" class=" form-control"><?php  echo $data['district_description']; ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('please_enter_text') }}</div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="district_status">{{ __('district_status') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-district_status-holder" class=" ">
                                                    <input id="ctrl-district_status"  value="<?php  echo $data['district_status']; ?>" type="text" placeholder="{{ __('enter_district_status') }}" list="district_status_list"  required="" name="district_status"  class="form-control " />
                                                    <datalist id="district_status_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['district_status'];
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
