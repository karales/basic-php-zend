/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * window.onload = function(){ alert("welcome"); }
 * 
 * 
 */



// wait for the DOM to be loaded 
        $(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#wysiwyg').ajaxForm(function() { 
                alert("Thank you for your comment!"); 
            }); 
        }); 