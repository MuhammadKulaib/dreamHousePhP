<?php include "header.php"; ?>

    <div class="flex justify-center flex-column flex-gap items-center">
        <div class="rounded-card mt-4">
            <h1 class="text-center text-green text">حجز الموعد</h1>
            <div>
                <p class="text-green fw-bold">* الاسم: </p>
                <input type="text" class="input-green mt-3 w-100">
            </div>
            <div class="mt-4">
                <p class="text-green fw-bold">* اكتب تفاصيل اللقاء: </p>
                <textarea name="" class="input-green" id="" cols="30" rows="8"></textarea>
            </div>
        </div>
        <div class="flex justify-end w-100">
            <button class="btn-green-outline">اتمام الحجز</button>
        </div>

    </div>
    
<?php include 'footer.php'; ?>