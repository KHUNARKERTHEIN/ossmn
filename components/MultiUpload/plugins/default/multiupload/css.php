.multiple-upload-item {
	margin: 0 5px 0 0;
	overflow: hidden;
	display: inline-block;
}

.multiple-upload-container {
	white-space: nowrap;
	overflow: hidden;
	overflow-x: auto;
}

.multiple-upload-item img {
	width: 100px;
	height: 100px;
	margin: 0 5px 0 0;
	display: inline-block;
	object-fit: cover;
	border: 1px solid #ccc;
	user-select: none;
	pointer-events: none;
	border-radius: max(0px, min(8px, calc((100vw - 4px - 100%) * 9999))) / 8px;
}

.multiupload-output {
	display: flex;
	flex-wrap: wrap;
	margin-bottom: 10px;
}

.multiupload-output li {
	height: 40vh;
	flex-grow: 1;
	list-style: none;
	position: relative;
}

.multiupload-output img {
	max-height: 100%;
	min-width: 100%;
	object-fit: cover;
	vertical-align: bottom;
	cursor: pointer;
}

.multiupload-view-more {
	position: absolute;
	left: 50%;
	top: 50%;
	color: #fff;
	font-size: 9vh;
	transform: translate(-50%, -50%);
}

.multiupload-img-last {
	filter: brightness(0.5);
}
.ossn-wall-item .post-contents img {
    border: 1px solid #fff;
}