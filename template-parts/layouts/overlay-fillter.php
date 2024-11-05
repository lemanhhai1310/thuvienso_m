<div id="offcanvas-overlay-fillter" class="danhmucchitiet__offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar danhmucchitiet__offcanvas__bar uk-flex uk-flex-column">
        <div class="uk-container uk-container-expand uk-margin-remove-left uk-margin-remove-right">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <h3 class="uk-text-center fz-16px be-vietnam-pro-600 lh-125 text-181C32 uk-margin-remove">Bộ lọc nâng cao</h3>
        </div>
        <div class="uk-flex-auto uk-overflow-auto uk-section-xsmall item-20px uk-container uk-container-expand uk-margin-remove-left uk-margin-remove-right">
            <div class="fz-14px be-vietnam-pro-600 text-181C32 lh-142">Lọc theo định dạng</div>
            <div class="uk-grid-8 uk-grid uk-child-width-auto item-12px" uk-grid>
                <?php
                $data = [
                    'Tất cả',
                    'Sách giấy',
                    'Có ebook',
                ];
                foreach ($data as $k=>$v): ?>
                    <label>
                        <input class="danhmucchitiet__fillter__dinhdang__checkbox uk-checkbox uk-hidden" type="checkbox">
                        <div class="danhmucchitiet__fillter__dinhdang__label uk-border-pill fz-14px be-vietnam-pro-500"><?= $v ?></div>
                    </label>
                <?php endforeach; ?>
            </div>
            <div class="divider item-20px"></div>
            <div class="item-20px fz-14px be-vietnam-pro-600 text-181C32 lh-142">Sắp xếp theo</div>
            <div class="uk-child-width item-12px uk-grid-8" uk-grid>
                <div>
                    <div class="uk-width" uk-form-custom="target: > * > span:nth-child(2)">
                        <select aria-label="Custom controls">
                            <option value="">A tới Z</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="danhmucchitiet__fillter__sort__btn uk-button uk-width uk-border-pill" type="button" tabindex="-1">
                            <span>Thứ tự:</span>
                            <span></span>
                            <span class="danhmucchitiet__fillter__sort__icon1" uk-icon="icon: chevron-down"></span>
                        </button>
                    </div>
                </div>
                <div>
                    <div class="uk-width" uk-form-custom="target: > * > span:nth-child(2)">
                        <select aria-label="Custom controls">
                            <option value="">Thấp tới cao</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="danhmucchitiet__fillter__sort__btn uk-button uk-border-pill uk-width" type="button" tabindex="-1">
                            <span>Tình trạng đọc:</span>
                            <span></span>
                            <span class="danhmucchitiet__fillter__sort__icon2" uk-icon="icon: arrow-up"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="divider item-20px"></div>
            <div class="item-20px fz-14px be-vietnam-pro-600 text-181C32 lh-142">Chủ đề</div>
            <div class="uk-grid-small uk-child-width uk-grid item-12px" uk-grid>
                <div>
                    <label>
                        <input class="uk-checkbox danhmucchitiet__fillter__chude__checkbox" type="checkbox">
                        <span class="danhmucchitiet__fillter__chude__label">Phiêu lưu, hành động</span>
                    </label>
                </div>
                <div>
                    <label>
                        <input class="uk-checkbox danhmucchitiet__fillter__chude__checkbox" type="checkbox">
                        <span class="danhmucchitiet__fillter__chude__label">Tâm lý học</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="uk-container uk-container-expand uk-margin-remove-left uk-margin-remove-right danhmucchitiet__fillter__section">
            <div class="uk-section-xsmall" style="padding: 16px 0;">
                <div class="uk-child-width-expand uk-grid uk-grid-8" uk-grid>
                    <div>
                        <button class="danhmucchitiet__fillter__btn danhmucchitiet__fillter__btn--reset uk-button uk-width uk-border-pill fz-16px be-vietnam-pro-600">Đặt lại</button>
                    </div>
                    <div>
                        <button class="danhmucchitiet__fillter__btn danhmucchitiet__fillter__btn--submit uk-button uk-width uk-border-pill fz-16px be-vietnam-pro-600">Lọc</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const element = document.querySelector(".danhmucchitiet__offcanvas");
    // UIkit.offcanvas(element).show();
</script>