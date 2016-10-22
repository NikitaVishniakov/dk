<div class="col-md-4 col-lg-4 col-sm-6 col-xs-10">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form method="post" name="search_form"
                  action="search.php">

                <div class="input-group">
                    <input type="text" id="search_search" name="search" required="required" class="form-control search_field" value="<?php if(isset($_GET['id'])){echo $_GET['id'];}; ?>" />
                    <span class="input-group-btn btn-group-sm">
                        <div class="btn-group btn-group-sm " data-toggle="buttons">
                            <label id="strict_search_area"
                                   class="btn btn-primary pop "
                                   data-placement="bottom"
                                   data-content="Строгий поиск">
                            <input type="checkbox" id="search_strict" name="searcha" checked="" style="  width: 30px; height:                                        20px; margin: 4px;" value="1" />
                                <span id="strict_search_gly" class="glyphicon glyphicon-remove"></span>
                            </label>
                        </div>
                        <input id="collection_search"
                               class="btn btn-primary"
                               type="submit"
                               name="submit"
                               value="искать">
                    </span>
                </div>
            </form>
        </div>
    </div>        
</div>