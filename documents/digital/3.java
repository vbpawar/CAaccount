package com.Support_Module.domain;

import java.sql.Timestamp;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "tab_standard_rfcdetails")
public class NewStandardRfc {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name = "rfcDetailsId")
	private Integer rfcDetailsId;
	
	@Column(name = "parentTicketId")
	private Integer parentTicketId;
	
	@Column(name = "childTicketId")
	private Integer childTicketId;
	
	@Column(name = "referenceChildNumber")
	private String referenceChildNumber;
	
	@Column(name = "rfcNumber")
	private String rfcNumber;
	
	@Column(name = "impactServiceType")
	private String impactServiceType;
	
	@Column(name = "rcaId")
	private Integer rcaId;
	
	@Column(name = "impactType")
	private String impactType;
	
	@Column(name = "customerName")
	private String customerName;
		
	@Column(name = "impacted_branchName")
	private String impactedBranchName;
	
	@Column(name = "rfc_status")
	private String status;
	
	@Column(name = "beginTime")
	private Timestamp beginTime;
	
	@Column(name = "endTime")
	private Timestamp endTime;
	
	@Column(name = "durationTime")
	private Integer durationTime;
	
	@Column(name = "remark")
	private String remark;
	
	@Column(name = "createdby")
	private Integer createdby;
	
	@Column(name = "modifiedby")
	private Integer modifiedby;
	
	@Column(name = "createdAt")
	private Timestamp createdAt;
	
	@Column(name = "updatedAt")
	private Timestamp updatedAt;
	

	public Integer getRfcDetailsId() {
		return rfcDetailsId;
	}

	public Integer getParentTicketId() {
		return parentTicketId;
	}

	public Integer getChildTicketId() {
		return childTicketId;
	}

	public String getReferenceChildNumber() {
		return referenceChildNumber;
	}

	public String getRfcNumber() {
		return rfcNumber;
	}

	public String getImpactServiceType() {
		return impactServiceType;
	}


	public String getImpactType() {
		return impactType;
	}

	public String getCustomerName() {
		return customerName;
	}

	
	public Timestamp getBeginTime() {
		return beginTime;
	}

	public Timestamp getEndTime() {
		return endTime;
	}

	public Integer getDurationTime() {
		return durationTime;
	}

	public String getRemark() {
		return remark;
	}

	public Integer getCreatedby() {
		return createdby;
	}

	public Integer getModifiedby() {
		return modifiedby;
	}

	public Timestamp getCreatedAt() {
		return createdAt;
	}

	public Timestamp getUpdatedAt() {
		return updatedAt;
	}

	public void setRfcDetailsId(Integer rfcDetailsId) {
		this.rfcDetailsId = rfcDetailsId;
	}

	public void setParentTicketId(Integer parentTicketId) {
		this.parentTicketId = parentTicketId;
	}

	public void setChildTicketId(Integer childTicketId) {
		this.childTicketId = childTicketId;
	}

	public void setReferenceChildNumber(String referenceChildNumber) {
		this.referenceChildNumber = referenceChildNumber;
	}

	public void setRfcNumber(String rfcNumber) {
		this.rfcNumber = rfcNumber;
	}

	public void setImpactServiceType(String impactServiceType) {
		this.impactServiceType = impactServiceType;
	}


	public void setImpactType(String impactType) {
		this.impactType = impactType;
	}

	public void setCustomerName(String customerName) {
		this.customerName = customerName;
	}

	

	public void setBeginTime(Timestamp beginTime) {
		this.beginTime = beginTime;
	}

	public void setEndTime(Timestamp endTime) {
		this.endTime = endTime;
	}

	public void setDurationTime(Integer durationTime) {
		this.durationTime = durationTime;
	}

	public void setRemark(String remark) {
		this.remark = remark;
	}

	public void setCreatedby(Integer createdby) {
		this.createdby = createdby;
	}

	public void setModifiedby(Integer modifiedby) {
		this.modifiedby = modifiedby;
	}

	public void setCreatedAt(Timestamp createdAt) {
		this.createdAt = createdAt;
	}

	public void setUpdatedAt(Timestamp updatedAt) {
		this.updatedAt = updatedAt;
	}

	public String getImpactedBranchName() {
		return impactedBranchName;
	}

	public void setImpactedBranchName(String impactedBranchName) {
		this.impactedBranchName = impactedBranchName;
	}

	public String getStatus() {
		return status;
	}

	public void setStatus(String status) {
		this.status = status;
	}

	public Integer getRcaId() {
		return rcaId;
	}

	public void setRcaId(Integer rcaId) {
		this.rcaId = rcaId;
	}
	
	
	
	
	
}
