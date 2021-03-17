<div class="" id="headline" ng-app="myApp" ng-controller="myCtrl">
    <div class="">
        <?php
        $this->load->view("ws/website");
        ?>
    </div>
</div>
<!-- <script src="<?php echo base_url('assets/js/forms.js'); ?>"></script> -->
<script>
    var business_id = <?php echo $this->data[0]->id; ?>;
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {

    });

    app.controller('businessCtrl', function($scope, $sce) {
        $scope.business = [];
        $scope.trustSrc = function(src) {
            var id = getId(src);
            return $sce.trustAsResourceUrl('//www.youtube.com/embed/' + id);
        }
    });
    app.filter('unsafe', function($sce) {
        return $sce.trustAsHtml;
    });

    function getId(url) {
        const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
        const match = url.match(regExp);

        return (match && match[2].length === 11) ?
            match[2] :
            null;
    }
    //var base_url = "http://localhost/imitationjewellry/";
    //var base_url = "https://store.ijts.in/";
    var base_url = "<?php echo base_url() ?>";
    //var base_url = "https://imitationjewelryindia.com/";
    $().ready(function() {
        $.ajax({
            type: "GET",
            url: base_url + 'B/getData/' + business_id,
            success: function(d) {
                var result = JSON.parse(d);
                if (result.status === 'success') {
                    //goto(1);
                    angular.element("#business_view").scope().business = result.data[0];
                    angular.element("#business_view").scope().$apply();

                } else {
                    $(".error").html(result.error);
                    alert(result.error);
                }
            },
            error: function(e) {
                alert(e);
            }
        });
    })
</script>