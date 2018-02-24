<div id="thongsoxe" class="clearfix">



    

    <div class="panel-group" id="accordion" style="padding: 10px">
            <?php $__currentLoopData = $specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel panel-default">
                    <div class="panel-heading menus">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <b><?php echo e($row->name); ?></b>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse content-item">
                      <div class="panel-body">
                            <?php echo $row->content; ?>

                      </div>
                    </div>
                  </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
    </div>
</div>

<style type="text/css">
.block-title {
    display: inline-block;
    width: 100%;
    height: 45px;
    line-height: 43px;
    background-color: #e7e7e7;
    border-top: 1px solid #b9b9b9;
    border-bottom: 1px solid #b9b9b9;
    color: #000000;
    text-align: center;
    font-size: 18px;
    margin: 20px 0px;
}
.panel-group .panel-heading+.panel-collapse>.list-group, .panel-group .panel-heading+.panel-collapse>.panel-body {
    border: none !important;
}
.panel {
    background-color: transparent !important;
    border: none;
}
.menus {
    font-size: 13px;
    font-weight: normal;
    font-family: Verdana;
    color: #000000;
    background: #e5e5e5;
    cursor: pointer;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    padding: 5px 15px 5px 0px;
    line-height: 18px;
    margin-top: 12px;
    position: relative;
}
.panel-heading .accordion-toggle:after {
    font-family: 'Glyphicons Halflings';
    content: "\e114";
    float: left;
    color: white;
    background-color: #5a5a5a;
    font-size: 8px;
    width: 24px;
    height: 27px;
    position: relative;
    border-radius: 4px;
    margin-top: -5px;
    padding: 8px;
    margin-right: 12px;
}
.panel-heading .accordion-toggle.collapsed:after {
    content: "\e080";
}
.accordion-toggle {
    font-size: 12px
}
table {
    border-spacing: 0;
    border-collapse: collapse;
    border: none;
    padding: 0;
    width: 100%;
}
td.name {
    width: 10%;
    text-align: left;
}
td.code {
    width: 20%;
}
td.units {
    width: 10%;
}
td.last {
    border-right: none;
    width: 60%;
    height: 100%;
}
td.last table tr td {
    height: 40px;
}
td.last-td {
    border-right: none;
}
td {
    width: 155px;
    height: 30px;
    border-top: 1px dotted #cdc5c5;
    border-right: 1px dotted #cdc5c5;
    text-align: center;
    vertical-align: middle;
    padding: 0;
}
.content-item {
    display: none;
    border: 1px solid #d0cece;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    position: relative;
    background: #fff;
    margin-top: 5px;
}

</style>