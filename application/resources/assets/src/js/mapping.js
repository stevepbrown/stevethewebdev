

/*** mapping.js
 *                                     .__                         __         
 *      _____  _____   ______  ______  |__|  ____    ____         |__|  ______
 *     /     \ \__  \  \____ \ \____ \ |  | /    \  / ___\        |  | /  ___/
 *    |  Y Y  \ / __ \_|  |_> >|  |_> >|  ||   |  \/ /_/  >       |  | \___ \ 
 *    |__|_|  /(____  /|   __/ |   __/ |__||___|  /\___  / /\ /\__|  |/____  >
 *          \/      \/ |__|    |__|             \//_____/  \/ \______|     \/ 
 */



// Detect that the document is loaded

$(document).ready(function () {

    let mapWidth= $("#div-location-map").width();
    let mapHeight= $("#div-location-map").height();

    $.ajax(
        {
          url: '/ajax/map_loader',
          method: 'get',
          data: {dimensions: '100X100'},
          dataType: 'html',
          success: function(result){
            loadMapContent(result);},
          error: function(result){
            alert('Error, logging.');
            console.log(result);
          },
          complete: function(){
            alert('Completed.');
          },        
        
        }
  
      )
   
    //  method to invoke AJAX request   
    loadMapContent(); 
      
  

});

 /**
   * Loads the AJAX response into the target element
   */
  function loadMapContent(result){

    let status;

    try {
      $('#div-location-map').html(result);
        status=true;
      }
     
    catch(err) {
      alert('Failed to load AJAX response data, see error log.');
      console.log(err);
      status=false;
    }
    finally {
            return status;
            }

    
  }



