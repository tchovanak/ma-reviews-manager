	
	var slctDiv = "swapper1"; //active swapper
	var activeLi = "btn1";
	/*
		Swaps content divs for every step of report creation
	*/
	function SwapDivsWithClick(div2,li){
	   if(div2 == slctDiv){
		   return;
	   }
	   
	   d1 = document.getElementById(slctDiv);
	   d2 = document.getElementById(div2);
	   
	   // change active navigation button
	   var btn = document.getElementById(li);
	   var btnActive = document.getElementById(activeLi);
	   btnActive.className = "";
	   btn.className = btn.className + "active";
	   activeLi = li;
	   
	   if( d2.style.display == "none" ){
		  d1.style.display = "none";
		  d2.style.display = "block";
	   }else{
		  d1.style.display = "block";
		  d2.style.display = "none";
	   }
	   slctDiv = div2;
		
	}
	
	
	/*
		Initializes table rows , so they are selectable.
	*/
	function tableRowsSelection() {
   
    /* Get all rows from your 'table' but not the first one 
     * that includes headers. */
    var rows = $('tr').not(':first');
    rows.on('click', function(e) {
        var slctRow = $(this);
        /* Check if 'Ctrl', 'cmd' or 'Shift' keyboard key was pressed
         * 'Ctrl' => is represented by 'e.ctrlKey' or 'e.metaKey'
         * 'Shift' => is represented by 'e.shiftKey' */
        if ((e.ctrlKey || e.metaKey) || e.shiftKey) {
            /* If pressed highlight the other row that was clicked */
            slctRow.addClass('highlight');
        } else {
            /* Otherwise just highlight one row and clean others */
            rows.removeClass('highlight');
            slctRow.addClass('highlight');
        }
        
    });
    
    /* This 'event' is used just to avoid that the table text 
     * gets selected (just for styling). 
     * For example, when pressing 'Shift' keyboard key and clicking 
     * (without this 'event') the text of the 'table' will be selected.
     * You can remove it if you want, I just tested this in 
     * Chrome v30.0.1599.69 */
    $(document).bind('selectstart dragstart', function(e) { 
        e.preventDefault(); return false; 
    });
    
}