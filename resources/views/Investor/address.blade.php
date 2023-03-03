<x-app-layout>

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="d-sm-flex justify-content-between">


                </div>
            </div>
            <div class="row clearfix">


                <!-- @foreach ($payment as $payment)
-->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div class="member-card verified">
                                <div class="m-t-20">


                                    <p class="text-body mb-0 mt-0 h6"><b>NAME</b></p>
                                    <p class="text-body"> <b> {{ $payment->name }}</b><span></p>

                                    <p class="text-body mb-0 h6"><b>NETWORK</b></p>
                                    <p class="text-body"> <b> {{ $payment->network }}</b></p>

                                    <p class="text-pink mb-3 h6"><b>ADDRESS</b></p>
                                    <input type="text" class="text-pink mb-4" value="{{ $payment->address }} "
                                        id="myInput">



                                    <!-- The button used to copy the text -->
                                    <button onclick="myFunction() " class="btn bg-primary btn-raised">Copy text</button>
                                    <script>
                                        function myFunction() {
                                            // Get the text field
                                            var copyText = document.getElementById("myInput");

                                            // Select the text field
                                            copyText.select();
                                            copyText.setSelectionRange(0, 99999); // For mobile devices

                                            // Copy the text inside the text field
                                            navigator.clipboard.writeText(copyText.value);

                                            // Alert the copied text
                                            alert("Copied the text: " + copyText.value);
                                        }
                                    </script>


                                </div>




                            </div>


                        </div>
                    </div>
                </div>
                <!--
@endforeach -->


            </div>
        </div>
    </section>
    <!-- main content -->

</x-app-layout>
