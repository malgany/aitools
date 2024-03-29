push:
	@DIFF=$$(git diff --name-only) && \
	git add . && \
	git commit -m "Modified files: $$DIFF" && \
	git push -f origin main
deploy:
	git pull
	@export DEPLOYPATH=/home1/infin429/public_html/tools && \
	cp -R src/css $$DEPLOYPATH && \
	cp -R src/pages $$DEPLOYPATH && \
	cp .htaccess $$DEPLOYPATH && \
	cp robots.txt $$DEPLOYPATH && \
	cp src/index.php  $$DEPLOYPATH
