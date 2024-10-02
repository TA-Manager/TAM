<x-layout>
    <div class="container mx-auto py-10">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 text-[#2B308B]">
            <div class="flex items-center">
                <img src="{{ asset('img/leftArrow.svg') }}" alt="leftArrow" class="">
                <div class="ml-2">
                    <p class="text-3xl font-bold">ฟอร์มรับสมัครนักศึกษาช่วยงาน ( TA )</p>
                    <p>คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</p>
                </div>
            </div>
            <!-- Section 1: Personal Information -->
            <div class="my-6">
                <p class="font-semibold text-3xl mb-2">1. ประวัติส่วนตัว</p>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label for="student_id" class="block text-xl mb-2">รหัสนักศึกษา</label>
                        <input id="student_id" name="student_id" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div>
                        <label for="first_name" class="block text-xl mb-2">ชื่อ</label>
                        <input id="first_name" name="first_name" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div>
                        <label for="last_name" class="block text-xl mb-2">นามสกุล</label>
                        <input id="last_name" name="last_name" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div>
                        <label for="birthdate" class="block text-xl mb-2">วัน/เดือน/ปีเกิด</label>
                        <input id="birthdate" name="birthdate" type="date" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline placeholder:text-[#8E8E9F]" required>
                    </div>
                    <div>
                        <label for="nationality" class="block text-xl mb-2">สัญชาติ</label>
                        <input id="nationality" name="nationality" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div>
                        <label for="religion" class="block text-xl mb-2">ศาสนา</label>
                        <input id="religion" name="religion" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center my-8"> <!-- divider -->
                <div class="w-[85%] h-px bg-[#0692DF] bg-opacity-75"></div>
            </div>
            <!-- Address -->
            <div class="mb-6">
                <p class="font-semibold text-3xl mb-2">ที่อยู่ที่สามารถติดต่อได้</p>
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <label for="address" class="visible block text-xl mb-2">ที่อยู่</label>
                        <input id="address" name="address" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div>
                        <label for="sub_district" class="block text-xl mb-2">เขต/ตำบล</label>
                        <input id="sub_district" name="sub_district" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div>
                        <label for="district" class="block text-xl mb-2">แขวง/อำเภอ</label>
                        <input id="district" name="district" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div>
                        <label for="province" class="block text-xl mb-2">จังหวัด</label>
                        <input id="province" name="province" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div>
                        <label for="postal_code" class="block text-xl mb-2">รหัสไปรษณีย์</label>
                        <input id="postal_code" name="postal_code" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center my-8"> <!-- divider -->
                <div class="w-[85%] h-px bg-[#0692DF] bg-opacity-75"></div>
            </div>
            <!-- Contact Information -->
            <div class="mb-6">
                <p class="font-semibold text-3xl mb-2">ช่องทางติดต่อ</p>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="phone_num" class="block text-xl mb-2">เบอร์โทร</label>
                        <input id="phone_num" name="phone_num" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div>
                        <label for="email" class="block text-xl mb-2">อีเมล</label>
                        <input id="email" name="email" type="email" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center my-8"> <!-- divider -->
                <div class="w-[85%] h-px bg-[#0692DF] bg-opacity-75"></div>
            </div>
            <!-- occupation -->
            <div class="mb-6">
                <div class="grid grid-rows-2 gap-4">
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="jobs" class="block text-xl mb-2">อาชีพปัจจุบัน</label>
                            <input id="jobs" name="jobs" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div>
                            <label for="position" class="block text-xl mb-2">ตำแหน่ง</label>
                            <input id="position" name="position" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div>
                            <label for="workplace" class="block text-xl mb-2">สถานที่ทำงาน</label>
                            <input id="workplace" name="workplace" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="income_from" class="block text-xl mb-2">ค่าใช้จ่ายในการศึกษาได้รับจาก</label>
                            <input id="income_from" name="income_from" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div>
                            <label for="income_amount" class="block text-xl mb-2">รายได้ปัจจุบันต่อเดิอน</label>
                            <input id="income_amount" name="income_amount" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-6">
                    <label for="reason" class="block text-xl mb-2">เหตุผลที่ยื่น</label>
                    <textarea id="reason" name="reason" class="h-28 appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required></textarea>
                </div>
                <!-- 2. ประวัติการศึกษา -->
                <div>
                    <p class="font-semibold text-3xl">2. ประวัติการศึกษา (ระดับอุดมศึกษา)</p>
                    <div class="flex items-center justify-center my-6">
                        <button class="flex justify-center items-center border-2 border-[#0692DF] rounded-lg px-7 py-2" id="addTranscript" type="button">
                            <img src="{{ asset('img/add_circle.svg') }}" alt="add circle">
                            <p class="text-2xl text-[#0692DF] ml-3">เพิ่ม</p>
                        </button>
                    </div>
                    <div class="bg-[#D9EDF7] w-full hidden rounded-2xl pb-4 mb-6" id="transcriptInfo">
                        <div class="grid grid-cols-2 gap-6 p-4">
                            <div>
                                <label for="college_name" class="block text-xl mb-2">ชื่อสถานศึกษา</label>
                                <input id="college_name" name="college_name" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div>
                                <label for="degree_name" class="block text-xl mb-2">ชื่อปริญญาที่ได้รับ</label>
                                <input id="degree_name" name="degree_name" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div>
                                <label for="gpa" class="block text-xl mb-2">เกรดเฉลี่ย</label>
                                <input id="gpa" name="gpa" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div>
                                <label for="grad_year" class="block text-xl mb-2">ปีที่สำเร็จการศึกษา</label>
                                <input id="grad_year" name="grad_year" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <button class="rounded-lg bg-white text-2xl text-[#0692DF] border border-[#0692DF] px-10 py-1">
                                บันทึก
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="font-semibold text-3xl mb-2">3. ประวัติการได้รับทุนการศึกษา (รวมถึงทุนที่ได้รับในปัจจุบัน ถ้ามี)</p>
                    <div class="flex items-center justify-center my-6">
                        <button class="flex justify-center items-center border-2 border-[#0692DF] rounded-lg px-7 py-2" id="addScholarship" type="button">
                            <img src="{{ asset('img/add_circle.svg') }}" alt="add circle">
                            <p class="text-2xl text-[#0692DF] ml-3">เพิ่ม</p>
                        </button>
                    </div>
                    <div class="bg-[#D9EDF7] w-full hidden rounded-2xl pb-4 mb-6" id="scholarshipInfo">
                        <div class="grid grid-cols-2 gap-6 p-4">
                            <div>
                                <label for="college_name" class="block text-xl mb-2">ชื่อทุน</label>
                                <input id="college_name" name="college_name" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div>
                                <label for="degree_name" class="block text-xl mb-2">ระยะเวลาที่ได้รับทุน</label>
                                <input id="degree_name" name="degree_name" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6 p-4 pt-0">
                            <div>
                                <label for="college_name" class="block text-xl mb-2">ประเภทของทุน/จำนวนเงิน</label>
                                <input id="college_name" name="college_name" type="text" class=" appearance-none border border-[#0692DF] rounded-lg w-full py-2 px-3 focus:outline-none focus:shadow-outline" required>
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <button class="rounded-lg bg-white text-2xl text-[#0692DF] border border-[#0692DF] px-10 py-1">
                                บันทึก
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="font-semibold text-3xl mb-4">4. อัปโหลดเอกสาร</p>
                    <div class="flex items-center justify-between">
                        <p class="text-2xl font-semibold">สำเนา Transcript ฉบับปัจจุบัน</p>
                        <button class="flex justify-center items-center border-2 border-[#0692DF] rounded-lg px-7 py-2">
                            <img src="{{ asset('img/add_circle.svg') }}" alt="add circle">
                            <p class="text-2xl text-[#0692DF] ml-3">เพิ่ม</p>
                        </button>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <p class="text-2xl font-semibold">ตารางเรียนรายบุคคล</p>
                        <button class="flex justify-center items-center border-2 border-[#0692DF] rounded-lg px-7 py-2">
                            <img src="{{ asset('img/add_circle.svg') }}" alt="add circle">
                            <p class="text-2xl text-[#0692DF] ml-3">เพิ่ม</p>
                        </button>
                    </div>
                </div>
        </form>
    </div>
    <div class="flex justify-center items-center mt-10">
        <button class="px-20 py-4 text-[#0692DF] bg-[#0692DF]/[0.1] flex items-center bg-  rounded-[30px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
            <p class="font-semibold text-3xl">ยืนยันการสมัคร</p>
        </button>
    </div>
    <!-- success applicant modal -->
    <!-- <div class="w-[450px] h-[280px] flex flex-col justify-center items-center bg-white rounded-[30px]shadow-lg">
        <p class="text-[#0692DF] font-semibold text-3xl mb-3">ยืนยันการสมัคร</p>
        <img src="{{ asset('img/checkmark.svg') }}" alt="check mark">
    </div> -->
</x-layout>
<script>
        const transcirptButton = document.getElementById("addTranscript");
        const transcirptInfo = document.getElementById("transcriptInfo");
        const scholarshipButton = document.getElementById("addScholarship");
        const scholarshipInfo = document.getElementById("scholarshipInfo");
        transcirptButton.addEventListener('click', () => {
            transcirptInfo.classList.toggle('hidden');
            transcirptButton.classList.toggle('hidden');
        })

        scholarshipButton.addEventListener('click', () => {
            scholarshipInfo.classList.toggle('hidden');
            scholarshipButton.classList.toggle('hidden');
        })
</script>