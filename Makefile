deploy:
	git pull
	@export DEPLOYPATH=/home1/infin429/public_html/tools && \
	cp -R src/css $$DEPLOYPATH && \
	cp -R src/pages $$DEPLOYPATH && \
	cp .htaccess $$DEPLOYPATH && \
	cp src/index.php  $$DEPLOYPATH
