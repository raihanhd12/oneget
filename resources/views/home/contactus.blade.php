@extends('layouts.main')

@section('title', ' Contact Us')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/contactus/css/contactus.css') }}">
@endsection

@section('content')
    <section id="contactus" class="contactus">
        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
            <div class="section-title">
                <h1>Hubungi Kami</h1><br>
                <h4>Integrasikan dengan Percaya Diri. Kami siap membantu Anda. Jangan ragu untuk menghubungi Kami.</h4>
            </div>
        </div>
        <div class="container section-form">
            @if ($errors->any())
                <div class="alert alert-danger ">
                    @foreach ($errors->all() as $item)
                        {{ $item }}
                    @endforeach
                </div>
            @endif
            <form action="{{ route('contact-us.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <label for="first-name" class="form-label">First Name*</label>
                        <input type="text" class="form-control" id="first-name" name="first_name"
                            placeholder="Enter your first name here">
                    </div>
                    <div class="col">
                        <label for="last-name" class="form-label">Last Name*</label>
                        <input type="text" class="form-control" id="last-name" name="last_name"
                            placeholder="Enter your last name here">
                    </div>
                </div>

                <div class="mt-4">
                    <label for="email" class="form-label">Email*</label>
                    <input type="email" name="email" class="form-control" id="email"
                        placeholder="Enter your email address here">
                </div>
                <div class="mt-4">
                    <label for="subject" class="form-label">Subject*</label>
                    <select class="form-select" id="subject" name="subject" aria-label="subject"
                        aria-placeholder="Choose an option">
                        <option selected value="" class="select-placeholder">Choose an option</option>
                        <option value="Plans & Pricing">Plans & Pricing</option>
                        <option value="Request a demo">Request a demo</option>
                        <option value="I have a question">I have a question</option>
                        <option value="Something isn't working">Something isn't working</option>
                        <option value="NGO/Non-profit pricing">NGO/Non-profit pricing</option>
                        <option value="Feedback">Feedback</option>
                    </select>
                </div>
                <div class="mt-4">
                    <label for="message" class="form-label">Message*</label>
                    <textarea class="form-control pt-3" id="message" name="message" rows="8" placeholder="Enter your message here">{{ old('message') }}</textarea>
                </div>
                <div class="" id="preview"></div>
                <div class="row g-2 align-items-center mt-4">
                    <div class="col">
                        <label for="contact_files" class="file-upload-button">
                            <input type="file" id="contact_files" name="contact_files[]" class="file-upload-input"
                                multiple hidden>
                            <i class="bi bi-upload"></i> &nbsp;&nbsp; Upload File
                        </label>
                    </div>
                    <div class="col justify-content-start">
                        <span class="selected-file" id="selected-file">Maximum total file size: 10MB</span>
                    </div>
                </div>
                <button class="btn btn-bg mt-4" type="submit">Submit</button>
            </form>
        </div>
    </section>

    <script>
        const el = (sel, par) => (par || document).querySelector(sel);
        const elNew = (tag, props) => Object.assign(document.createElement(tag), props);

        const elFiles = el("#contact_files");
        const elPreview = el("#preview");

        const previewImage = (props) => elPreview.append(elNew("img", props));

        const reader = (file, method = "readAsDataURL") => new Promise((resolve, reject) => {
            const fr = new FileReader();
            fr.onload = () => resolve({
                file,
                result: fr.result
            });
            fr.onerror = (err) => reject(err);
            fr[method](file);
        });

        const previewImages = async (files) => {
            elPreview.innerHTML = "";

            let filesData = [];

            try {
                // Read all files. Return Array of Promises
                const readerPromises = files.map((file) => reader(file));
                filesData = await Promise.all(readerPromises);
            } catch (err) {
                elPreview.textContent = "An error occurred while loading images. Try again.";

                console.error(err);
                return;
            }

            // All OK. Preview images:
            filesData.forEach(data => {
                previewImage({
                    src: data.result,
                    alt: data.file.name
                });
            });
        };

        elFiles.addEventListener("change", (ev) => {
            if (!ev.currentTarget.files) return;
            previewImages([...ev.currentTarget.files]);
        });

        // Mengambil elemen input dan elemen untuk menampilkan pesan
        var fileInput = document.getElementById("contact_files");
        var selectedFile = document.getElementById("selected-file");

        // Menambahkan event listener untuk mengupdate pesan saat ada perubahan pada input file
        fileInput.addEventListener("change", function() {
            if (fileInput.files.length > 0) {
                let nameList = []
                selectedFile.style.color = "#000"
                for (let i = 0; i < fileInput.files.length; i++) {
                    nameList.push(" " + fileInput.files[i].name)
                }
                selectedFile.textContent = nameList;
            } else {
                selectedFile.textContent = "Maximum total file size: 10MB";
            }
        });
    </script>
@endsection
