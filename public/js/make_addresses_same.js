
function copyPermanentToTemporary() {
  const isChecked = document.getElementById("sameAddressCheckbox").checked;

  // Get permanent address values
  const permProvince = document.getElementById("perm_province").value;
  const permDistrict = document.getElementById("perm_district").value;
  const permMunicipality = document.getElementById("perm_local_level").value;
  const permTole = document.getElementById("perm_tole").value;

  // Assign values if checkbox is checked
  document.getElementById("temp_province").value = isChecked ? permProvince : "";
  document.getElementById("temp_district").value = isChecked ? permDistrict : "";
  document.getElementById("temp_local_level").value = isChecked ? permMunicipality : "";
  document.getElementById("temp_tole").value = isChecked ? permTole : "";

  // Optional: Make temp fields readonly when same
  document.getElementById("temp_province").readOnly = isChecked;
  document.getElementById("temp_district").readOnly = isChecked;
  document.getElementById("temp_local_level").readOnly = isChecked;
  document.getElementById("temp_tole").readOnly = isChecked;
}

