<?php if(isset($data['content'])): ?>
<div class="ai-text-result scroll-down">
    <div class="ai-copy-icon"><button type="button" class="copy-button" title="copy" onclick="copyText()"><i class="feather icon-copy"></i></button></div>
    <p id="myInput"><?php echo e($data['content'] ?? ''); ?></p>
</div>
<?php endif; ?>
<script>
    function copyText() {
      var copyText = document.getElementById("myInput");
      var range = document.createRange();
      range.selectNode(copyText);
      window.getSelection().removeAllRanges();
      window.getSelection().addRange(range);
      document.execCommand("copy");
      window.getSelection().removeAllRanges();
      // Optionally, you can provide some visual feedback to the user that the text has been copied
      alert("Text copied to clipboard!");
    }
    </script><?php /**PATH /home/keramfvp/edutech.keralify.com/resources/views/admin/openai/output.blade.php ENDPATH**/ ?>