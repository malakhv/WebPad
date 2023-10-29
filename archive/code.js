
    function onKeyTab(event) {
        /* var doc = VEditor.ownerDocument;
        var tabNode = doc.createTextNode('    '); // "\t" ?
        var selection = VEditor.getRootNode().getSelection();
        if (!selection.rangeCount) return;
        var range = selection.getRangeAt(0);
        range.insertNode(tabNode);
        range = doc.createRange();
        range.setStartAfter(tabNode);
        range.setEndAfter(tabNode);
        selection.removeAllRanges();
        selection.addRange(range); */
        insertText('    ');
    }

    function onKeyEnter(event) {
        /* var doc = VEditor.ownerDocument;
        var node = doc.createElement('br');
        var selection = VEditor.getRootNode().getSelection();
        if (!selection.rangeCount) return;
        var range = selection.getRangeAt(0);
        range.insertNode(node);
        range = doc.createRange();
        range.setStartAfter(node);
        range.setEndAfter(node);
        selection.removeAllRanges();
        selection.addRange(range); */
        //insertLineBreak();
        insertText('\n');
    }
