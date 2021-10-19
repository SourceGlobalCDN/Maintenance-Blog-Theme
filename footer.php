<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div><!-- end .row -->
</div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    Copyright &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>" target="_self"><?php $this->options->title(); ?></a> All Right Reserved.<br/>
    <?php _e('由 <a href="http://www.typecho.org" rel="noopener" target="_blank">Typecho</a> 强力驱动'); ?>.&nbsp;&nbsp;&nbsp;
    <?php _e('Theme: <a href="https://github.com/AH-SourceStorage/Maintenance-Blog-Theme" rel="noopener" target="_blank">Maintenance-Blog-Theme</a>'); ?>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
