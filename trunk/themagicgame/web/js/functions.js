/***
=============================================================
 * This library contains functions referred to all 
 *	generic Javascripts functions
=============================================================
 **/

/**
 * Submit given form by id. (use submitWithOnSubmit() if possible)
 */
function submitById(formId) {
	var form = document.getElementById(formId);
	form.submit();
	return true;
	/*var form = getObject(formId);
	if( isObject(form) ) {
		form.submit();
		return true;
	}*/
}

/**
 * Check if element is object.
 **/
function isObject(theVar) {
    ret = false;
    if (typeof(theVar) == 'object') {
        ret = !isNull(theVar);
    }
    return ret;
}

/**
 * Check if element is null.
 **/
function isNull(theVar) {
    if (typeof(theVar) == 'undefined')
        return true;
    if (theVar == null)
        return true;
    return false;
}

/**
 * Check if element is empty.
 **/
function isEmpty(theVar) {
    if (isNull(theVar))
        return true;
    if (theVar == '')
        return true;
    return false;
}

/**
 * Return object reference from element identified by 'objectId'.
 * This should be used instead of 'getElementById', to get crossbrowsing compliance.
 **/
function getObject(objectId) {
	var object;
	// cross-browser function to get an object given its id
	// If you need to change the style of an object or its display/visibility
	// use one of the other methods in this template
	// This function won't work for NN 4 DOM ==> Only use internally
	if(document.getElementById && document.getElementById(objectId)) {
		// W3C DOM
		object = document.getElementById(objectId);
	} else if (document.all && document.all(objectId)) {
		// MSIE 4 DOM
		object = document.all(objectId);
	}

	// Aditional check. If encountered object is not the one searched.
	// This could happens, for example in i.e., use two separate forms in same page. Include two inputs, one in each form,
	// both with same element name but with different ids. Another condition, second element must have same element name and id.
	// Then, try to execute getObject('idOfElement2') with the id of the second object. 
	// The previous code instead of retrieve the second input returns the first one cause it have same element name.
	// To clarify,
	// <form>
	// 	<input name="dispatch" id="somedispatch"/>
	// </form>
	// <form>
	// 	<input name="dispatch" id="dispatch"/>
	// </form>
	//      getObject('dispatch') returns object of first input.
	
	//Some browsers javascript support (e.g. Rhino, which is used by JUnit) does not support
	//the getAttributeNode function. So, added an extra check to avoid invoking an undefined function
	if( object == null || object == undefined || !isObject(object) || (object.getAttributeNode && object.getAttributeNode('id') && object.getAttributeNode('id').value != objectId) ) {
		object = searchElementById(objectId);
	}
	
	return object;
}