</div>
<?php get_sidebar(); ?>
</div>
</div>
</main>

<footer class="footer border-top appearance">
    <div class="container-sm">
        <div class="row pt-1 pb-1">
            <div class="col-md-8">
                <div class="footer-widget">
                    <?php dynamic_sidebar('footer-widget'); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nguyen-y align-middle">
                    &copy; <?php echo date("Y"); ?> Nguyễn Ý
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>