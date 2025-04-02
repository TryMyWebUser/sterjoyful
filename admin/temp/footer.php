<!-- All Vendors -->
<script src="assets/js/vendor.js"></script>
<!-- Theme -->
<script src="assets/js/aio.admin.js"></script>
<!-- Custom -->
<script src="assets/js/custom.js"></script>

<!-- Page Level Javasctipt -->
<script>
    (() => {
        "use strict";
        const forms = document.querySelectorAll(".needs-validation");

        Array.from(forms).forEach((form) => {
            form.addEventListener(
                "submit",
                (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script>
<!-- /Page Level Javasctipt -->