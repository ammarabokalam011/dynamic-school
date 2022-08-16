<?php $this->load->view('include/js')?>
<link rel="stylesheet" href="<?php echo base_url('assest/jstree')?>/dist/themes/default/style.min.css" />


<h1>AJAX demo</h1>
<input id="search-input" class="search-input" />
<input id="show" type="button" value="show">
<div id="ajax" class="demo"></div>

<script src="<?php echo base_url('assest/jstree')?>/dist/jstree.min.js"></script>

<script>
    // ajax demo
    $('#ajax').jstree({

        "plugins" : [ "themes", "html_data", "checkbox", "sort", "ui" ,"search"],
        "search": {
            "case_sensitive": false,
            "show_only_matches": true
        }
        ,'core' : {
            'data' : {
                "url" : "<?php echo base_url('articals/')?>/get_subjects",
                "dataType" : "json" // needed only if you do not supply JSON headers
            }
        }

    }).bind("loaded.jstree", function(event, data) {
        $(this).jstree("open_all");
    });

    $(document).ready(function () {
        $(".search-input").keyup(function () {
            var searchString = $(this).val();
            $('#ajax').jstree('search', searchString);
        });
    });

    $('#show').click(function () {
        var arr=$('#ajax').jstree().get_selected(true);
        for(var i=0;i<arr.length;i++){
            alert( arr[i].text);
        }
    });

</script>