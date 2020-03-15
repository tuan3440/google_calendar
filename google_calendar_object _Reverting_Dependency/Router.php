<?php



// class Router {
 
//     function doUserAction() {
       
       
//         (new Presenter())->putMenu();
        
//         if (!isset($_GET['action']))
//             return;
//             $function = $_GET['action']; // assign valiable to name_function 
          
//         (new Logic(new Presenter))->$function();
//     }
 
// }

class Router {

    private $presenter;

    function __construct(Presenter $presenter) {
           $this->presenter = $presenter;
    }
    function doUserAction() {

        $this->presenter->putMenu();
        if (!isset($_GET['action']))
        return;
       
        $function = $_GET['action']; // assign valiable to name_function 
        $this->presenter->$function();
        
    }
    
}