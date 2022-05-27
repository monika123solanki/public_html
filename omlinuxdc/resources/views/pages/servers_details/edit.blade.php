@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('edit_servers_details');
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
                            <div class="h5 font-weight-bold text-primary">{{ __('edit_servers_details') }}</div>
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
                                <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("servers_details/edit/$rec_id"); ?>" method="post">
                                <!--[form-content-start]-->
                                @csrf
                                <div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="server_name">{{ __('server_name') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-server_name-holder" class=" ">
                                                    <input id="ctrl-server_name"  value="<?php  echo $data['server_name']; ?>" type="text" placeholder="{{ __('enter_server_name') }}" list="server_name_list"  required="" name="server_name"  class="form-control " />
                                                    <datalist id="server_name_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['server_name'];
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
                                                <label class="control-label" for="server_ip">{{ __('server_ip') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-server_ip-holder" class=" ">
                                                    <input id="ctrl-server_ip"  value="<?php  echo $data['server_ip']; ?>" type="text" placeholder="{{ __('enter_server_ip') }}" list="server_ip_list"  required="" name="server_ip"  class="form-control " />
                                                    <datalist id="server_ip_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['server_ip'];
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
                                                <label class="control-label" for="machine_types">{{ __('machine_types') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-machine_types-holder" class=" ">
                                                    <input id="ctrl-machine_types"  value="<?php  echo $data['machine_types']; ?>" type="text" placeholder="{{ __('enter_machine_types') }}" list="machine_types_list"  required="" name="machine_types"  class="form-control " />
                                                    <datalist id="machine_types_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['machine_types'];
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
                                                <label class="control-label" for="isp_providers">{{ __('isp_providers') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-isp_providers-holder" class=" ">
                                                    <input id="ctrl-isp_providers"  value="<?php  echo $data['isp_providers']; ?>" type="text" placeholder="{{ __('enter_isp_providers') }}" list="isp_providers_list"  required="" name="isp_providers"  class="form-control " />
                                                    <datalist id="isp_providers_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['isp_providers'];
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
                                                <label class="control-label" for="backup_provier">{{ __('backup_provier') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-backup_provier-holder" class=" ">
                                                    <input id="ctrl-backup_provier"  value="<?php  echo $data['backup_provier']; ?>" type="text" placeholder="{{ __('enter_backup_provier') }}" list="backup_provier_list"  required="" name="backup_provier"  class="form-control " />
                                                    <datalist id="backup_provier_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['backup_provier'];
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
                                                <label class="control-label" for="internet_cost">{{ __('internet_cost') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-internet_cost-holder" class=" ">
                                                    <input id="ctrl-internet_cost"  value="<?php  echo $data['internet_cost']; ?>" type="text" placeholder="{{ __('enter_internet_cost') }}" list="internet_cost_list"  required="" name="internet_cost"  class="form-control " />
                                                    <datalist id="internet_cost_list">
                                                    <?php
                                                        $options = Menu::bettry();
                                                        $field_value = $data['internet_cost'];
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
