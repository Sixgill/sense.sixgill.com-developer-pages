// var begining = 'jQuery(function($) {\n\tvar scriptName = "";\n\n\tfunction logError(message) {\n' +
//     '\t\tconsole.log("Catched error in " + scriptName + "; Message: " + message);\n\t\t}\n\n\ttry {\n' +
//     '\t\t/*Auto-included string*/ scriptName = "1_demo.js";\n\t\t(function(){'
// var tail =  '})();\n\t} catch (err) {\n\t\tlogError(err.message);\n\t}\n});'
//
// var source_begin = 'jQuery(function($) {'
// var regex = /[;]$/

module.exports = () => {

    var wrap_strings = {
        head: 'jQuery(function($) {\n\tvar scriptName = "";\n\n\tfunction logError(message) {\n' +
        '\t\tconsole.log("Catched error in " + scriptName + "; Message: " + message);\n\t\t}\n\n\ttry {\n' +
        '\t\t/*Auto-included string*/ scriptName = "1_demo.js";\n\t\t(function(){',
        tail: '})();\n\t} catch (err) {\n\t\tlogError(err.message);\n\t}\n});',
        source_head: 'jQuery(function($) {',
        regex: /[;]$/
        
    }
}